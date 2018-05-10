<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Branch_office class
 */

class Branch_office extends CI_Model
{
	/*
	Performs a search on branch_office
	*/
	public function search($search, $rows = 0, $limit_from = 0, $sort = 'branch_office_name', $order = 'asc', $count_only = FALSE)
	{
		// get_found_rows case
		if($count_only == TRUE)
		{
			$this->db->select('COUNT(branch_office.branch_office_id) as count');
		}

		$this->db->from('branch_office');
		// $this->db->join('people', 'employees.person_id = people.person_id');
		$this->db->group_start();
			$this->db->like('branch_office_id', $search);
			$this->db->or_like('branch_office_name', $search);
		$this->db->group_end();
		// $this->db->where('deleted', 0);

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
	Gets rows
	*/
	public function get_found_rows($search)
	{
		return $this->search($search, 0, 0, 'branch_office_name', 'asc', TRUE);
	}
	
	/*
	Get search suggestions to find a branch office
	*/
	public function get_search_suggestions($search, $limit = 5)
	{
		$suggestions = array();

		$this->db->from('branch_office');
		$this->db->like('branch_office_name', $search);
		//$this->db->where('active', 0);
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
}
?>
