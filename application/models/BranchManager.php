<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * BranchManager class
 */

class BranchManager extends Person
{
	/*
	Determines if a given person_id is an employee
	*/
	public function exists($person_id)
	{
		$array = array('name' => $name, 'title' => $title, 'status' => $status);

		$this->db->where($array); 
		$this->db->from('employees');
		$this->db->join('people', 'people.person_id = employees.person_id');
		$this->db->where('employees.person_id', $person_id);

		return ($this->db->get()->num_rows() == 1);
	}

	/*
	Gets total of rows
	*/
	public function get_total_rows()
	{	
		$params = array('deleted' => 0, 'branch_office_admin' => 1);
		$this->db->from('employees');
		$this->db->where($params);

		return $this->db->count_all_results();
	}

	/*
	Returns all the employees
	*/
	public function get_all($limit = 10000, $offset = 0)
	{	
		$params = array('deleted' => 0, 'branch_office_admin' => 1);
		$this->db->from('employees');
		$this->db->where($params);
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->order_by('last_name', 'asc');
		$this->db->limit($limit);
		$this->db->offset($offset);

		return $this->db->get();
	}

	/*
	Gets information about a particular employee
	*/
	public function get_info($employee_id)
	{
			$params = array('employees.person_id' => $employee_id, 'branch_office_admin' => 1);
		$this->db->from('employees');
		$this->db->join('people', 'people.person_id = employees.person_id');
		$this->db->where($params);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			//Get empty base parent object, as $employee_id is NOT an employee
			$person_obj = parent::get_info(-1);

			//Get all the fields from employee table
			//append those fields to base parent object, we we have a complete empty object
			foreach($this->db->list_fields('employees') as $field)
			{
				$person_obj->$field = '';
			}

			return $person_obj;
		}
	}

	/*
	Gets information about multiple employees
	*/
	public function get_multiple_info($employee_ids)
	{
		$this->db->from('employees');
		$this->db->join('people', 'people.person_id = employees.person_id');
		$this->db->where_in('employees.person_id', $employee_ids);
		$this->db->order_by('last_name', 'asc');

		return $this->db->get();
	}

	/*
	Inserts or updates an employee
	*/
	public function save_employee(&$person_data, &$employee_data, &$grants_data, $employee_id = FALSE)
	{
		//This is to know that is a branch manager
		$employee_data['branch_office_admin']=1;
		$success = FALSE;

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		if(parent::save($person_data, $employee_id))
		{
			if(!$employee_id || !$this->exists($employee_id))
			{
				$employee_data['person_id'] = $employee_id = $person_data['person_id'];
				$success = $this->db->insert('employees', $employee_data);
			}
			else
			{
				$this->db->where('person_id', $employee_id);
				$success = $this->db->update('employees', $employee_data);
			}

			//We have either inserted or updated a new employee, now lets set permissions.
			if($success)
			{
				//First lets clear out any grants the employee currently has.
				$success = $this->db->delete('grants', array('person_id' => $employee_id));

				//Now insert the new grants
				if($success)
				{
					$count = 0;
					foreach($grants_data as $grant)
					{
						$success = $this->db->insert('grants', array('permission_id' => $grant['permission_id'], 'person_id' => $employee_id, 'menu_group' => $grant['menu_group']));
						$count = $count+ 1;
					}
				}
			}
		}

		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}

	/*
	Deletes one employee
	*/
	public function delete($employee_id)
	{
		$success = FALSE;

		//Don't let employees delete theirself
		if($employee_id == $this->get_logged_in_employee_info()->person_id)
		{
			return FALSE;
		}

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		//Delete permissions
		if($this->db->delete('grants', array('person_id' => $employee_id)))
		{
			$this->db->where('person_id', $employee_id);
			$success = $this->db->update('employees', array('deleted' => 1));
		}

		$this->db->trans_complete();

		return $success;
	}

	/*
	Deletes a list of employees
	*/
	public function delete_list($employee_ids)
	{
		$success = FALSE;

		//Don't let employees delete theirself
		if(in_array($this->get_logged_in_employee_info()->person_id, $employee_ids))
		{
			return FALSE;
		}

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where_in('person_id', $employee_ids);
		//Delete permissions
		if($this->db->delete('grants'))
		{
			//delete from employee table
			$this->db->where_in('person_id', $employee_ids);
			$success = $this->db->update('employees', array('deleted' => 1));
		}

		$this->db->trans_complete();

		return $success;
 	}

	/*
	Get search suggestions to find employees
	*/
	public function get_search_suggestions($search, $limit = 5)
	{	
		$params = array('deleted' => 0, 'branch_office_admin' => 1);
		$suggestions = array();

		$this->db->from('employees');
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->group_start();
			$this->db->like('first_name', $search);
			$this->db->or_like('last_name', $search);
			$this->db->or_like('CONCAT(first_name, " ", last_name)', $search);
		$this->db->group_end();
		$this->db->where($params);
		$this->db->order_by('last_name', 'asc');
		foreach($this->db->get()->result() as $row)
		{
			$suggestions[] = array('value' => $row->person_id, 'label' => $row->first_name.' '.$row->last_name);
		}

		$this->db->from('employees');
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->where($params);
		$this->db->like('email', $search);
		$this->db->order_by('email', 'asc');
		foreach($this->db->get()->result() as $row)
		{
			$suggestions[] = array('value' => $row->person_id, 'label' => $row->email);
		}

		$this->db->from('employees');
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->where($params);
		$this->db->like('username', $search);
		$this->db->order_by('username', 'asc');
		foreach($this->db->get()->result() as $row)
		{
			$suggestions[] = array('value' => $row->person_id, 'label' => $row->username);
		}

		$this->db->from('employees');
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->where($params);
		$this->db->like('phone_number', $search);
		$this->db->order_by('phone_number', 'asc');
		foreach($this->db->get()->result() as $row)
		{
			$suggestions[] = array('value' => $row->person_id, 'label' => $row->phone_number);
		}

		//only return $limit suggestions
		if(count($suggestions > $limit))
		{
			$suggestions = array_slice($suggestions, 0, $limit);
		}

		return $suggestions;
	}

 	/*
	Gets rows
	*/
	public function get_found_rows($search)
	{
		return $this->search($search, 0, 0, 'last_name', 'asc', TRUE);
	}

	/*
	Performs a search on employees
	*/
	public function search($search, $rows = 0, $limit_from = 0, $sort = 'last_name', $order = 'asc', $count_only = FALSE)
	{
		$params = array('deleted' => 0, 'branch_office_admin' => 1);
		// get_found_rows case
		if($count_only == TRUE)
		{
			$this->db->select('COUNT(employees.person_id) as count');
		}

		$this->db->from('employees AS employees');
		$this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->group_start();
			$this->db->like('first_name', $search);
			$this->db->or_like('last_name', $search);
			$this->db->or_like('email', $search);
			$this->db->or_like('phone_number', $search);
			$this->db->or_like('username', $search);
			$this->db->or_like('CONCAT(first_name, " ", last_name)', $search);
		$this->db->group_end();
		$this->db->where($params);

		// get_found_rows case
		if($count_only == TRUE)
		{
			return $this->db->get()->row()->count;
		}

		$this->db->order_by($sort, $order);

		if($rows > 0)
		{
			$this->db->limit($rows, $limit_from);
		}

		return $this->db->get();
	}



	/*
	Attempts to login employee and set session. Returns boolean based on outcome.
	*/
	public function check_password($username, $password)
	{
		$query = $this->db->get_where('employees', array('username' => $username, 'deleted' => 0,'branch_office_admin'=>1), 1);

		if($query->num_rows() == 1)
		{
			$row = $query->row();

			// compare passwords
			if(password_verify($password, $row->password))
			{
				return TRUE;
			}

		}

		return FALSE;
	}

	/*
	Change password for the employee
	*/
	public function change_password($employee_data, $employee_id = FALSE)
	{
		$success = FALSE;
		$employee_data['branch_office_admin']=1;
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where('person_id', $employee_id);
		$success = $this->db->update('employees', $employee_data);

		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}
}
?>
