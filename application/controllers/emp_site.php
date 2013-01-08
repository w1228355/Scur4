<?php

class Emp_site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function emp_area ()
	{
		$data['main_content'] = 'empsite_view';
		$this->load->view('includes/template', $data);
    }	

    function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			$this->load->view('emplogin_form');
		}		
	}	
}

?>