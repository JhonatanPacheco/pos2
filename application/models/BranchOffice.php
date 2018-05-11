<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Branch_office class
 */

class BranchOffice extends CI_Model
{
	
	/*
	Inserts or updates an employee
	*/
	public function save_branch_office(&$branch_office_data, $branch_office_id = FALSE)
	{
		$success = FALSE;

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();
			if(!$branch_office_id || !$this->exists($branch_office_id))
			{
				$branch_office_data['branch_office_id'] = $branch_office_id = $branch_office_data['branch_office_id'];
				$success = $this->db->insert('branch_office', $branch_office_data);
			}
			else
			{
				$this->db->where('branch_office_id', $branch_office_id);
				$success = $this->db->update('branch_office', $branch_office_data);
			}

			
			if($success)
			{
				
			}

		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}
	
	/*
	Deletes a list of brach_office
	*/
	public function delete_list($branch_office_ids)
	{
		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where_in('branch_office_id', $branch_office_ids);
		$success = $this->db->update('branch_office', array('deleted'=>1));


		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}

	
	/*
	Performs a search on branch_office
	*/
	public function search($search, $rows = 0, $limit_from = 0, $sort = 'branch_office_name', $order = 'asc', $count_only = FALSE)
	{
		//get_found_rows case
		if($count_only == TRUE)
		{
			$this->db->select('COUNT(branch_office_id) as total');
		}

		$this->db->from('branch_office');
		$this->db->like('branch_office_name', $search);
		
		
		$this->db->where('deleted', 0);

		// get_found_rows case
		if($count_only == TRUE)
		{
			return $this->db->get()->row()->total;
		}

		$this->db->order_by($sort, $order);

		if($rows > 0)
		{
			$this->db->limit($rows, $limit_from);
		}

		return $this->db->get();
	}
	
	/*
	Gets rows
	*/
	public function get_found_rows($search)
	{
		return $this->search($search, 0, 0, 'branch_office_id', 'asc', TRUE);
	}
	
	/*
	Get search suggestions to find a branch office
	*/
	public function get_search_suggestions($search, $limit = 5)
	{
		$suggestions = array();

		$this->db->from('branch_office');
		$this->db->like('branch_office_name', $search);
		$this->db->where('deleted', 0);
		$this->db->order_by('branch_office_id', 'asc');
		foreach($this->db->get()->result() as $row)
		{
			$suggestions[] = array('value' => $row->branch_office_id, 'label' => $row->branch_office_name);
		}
	
		//only return $limit suggestions
		if(count($suggestions > $limit))
		{
			$suggestions = array_slice($suggestions, 0, $limit);
		}

		return $suggestions;
	}

	/*
	Gets total of rows
	*/
	public function get_total_rows()
	{
		$this->db->from('branch_office');
		$this->db->where('deleted', 0);

		return $this->db->count_all_results();
	}
	
	/*
	Gets information about a particular brach_office
	*/
	public function get_info($branch_office_id)
	{
		$this->db->from('branch_office');
		
		$this->db->where('branch_office_id', $branch_office_id);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->row();
		}
	}
	
	/*
	Determines if a given branch_office_id is an branch_office
	*/
	public function exists($branch_office_id)
	{
		$this->db->from('branch_office');
		$this->db->where('branch_office_id', $branch_office_id);

		return ($this->db->get()->num_rows() == 1);
	}
}
?>
