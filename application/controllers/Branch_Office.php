<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Branch_Office extends Secure_Controller
{
	public function __construct()
	{
		parent::__construct('branch_office');

	}
	
	public function index()
	{
		$data['table_headers'] = $this->xss_clean(get_branch_office_manage_table_headers());

		$this->load->view('branch_office/manage', $data);
	}

	/*
	Returns Items table data rows. This will be called with AJAX.
	*/
	public function search()
	{
		$search = $this->input->get('search');
		$limit = $this->input->get('limit');
		$offset = $this->input->get('offset');
		$sort = $this->input->get('sort');		
		$order = $this->input->get('order');

		$branch_offices = $this->Branch_office->search($search, $limit, $offset, $sort, $order);
		$total_rows = $this->Branch_office->get_found_rows($search);

		$data_rows = array();
		foreach($branch_offices->result() as $branch)
		{
			$data_rows[] = $this->xss_clean(get_branch_office_data_row($branch));
		}

		echo json_encode(array('total' => $total_rows, 'rows' => $data_rows));
	}
	
	
	/*
	Gives search suggestions based on what is being searched for
	*/
	public function suggest_search()
	{
		$suggestions = $this->xss_clean($this->Branch_office->get_search_suggestions($this->input->post('term')));

		echo json_encode($suggestions);
	}



	/*
	Loads the branch office edit form 
	*/
	public function view($branch_office_id = -1)
	{
		

		$this->load->view('branch_office/form', $data);
	}

	public function save($item_id = -1)
	{
		
	}
		
	public function delete()
	{
		$branch_offices_to_delete = $this->input->post('ids');

		if($this->Branch_office->delete_list($branch_offices_to_delete))
		{
			$message = $this->lang->line('items_successful_deleted') . ' ' . count($items_to_delete) . ' ' . $this->lang->line('items_one_or_multiple');
			echo json_encode(array('success' => TRUE, 'message' => $message));
		}
		else
		{
			echo json_encode(array('success' => FALSE, 'message' => $this->lang->line('items_cannot_be_deleted')));
		}
	}

	
	

	
}
?>
