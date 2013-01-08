<?php

class Manag_site extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function manag_area ()
	{
		$data['main_content'] = 'managsite_view';
		$this->load->view('includes/template', $data);
    }	

    function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			$this->load->view('managlogin_form');
		}		
	}

	public function error_view() {

		$data['main_content'] = 'error_view';
		$this->load->view('includes/template', $data);	
	}

	public function update_view() {

		$data['main_content'] = 'update_view';
		$this->load->view('includes/template', $data);	
	}

	public function update_controller(){

		$this->load->library('form_validation');
	 
	  	$this->form_validation->set_rules('empno', 'Employee No', 'required|matches(employees.emp_no)');
	  	$this->form_validation->set_rules('jobtitle', 'Job Title', 'required');
	  
	  	   if ($this->form_validation->run() == FALSE)
      		{
         		$this->error_view();
      		}

      		else
      			{	
					$empno=$this->input->post('empno');
					$jobtitle=$this->input->post('jobtitle');

					$this->load->model('manag_model');
					$this->manag_model->update_emp($empno, $jobtitle);
					$data['main_content'] = 'confirm';
					$this->load->view('includes/template', $data);
        			
				}

	}

	public function add_view() {

		$data['main_content'] = 'add_view';
		$this->load->view('includes/template', $data);	
	}
	
	public function add_controller() {
	 $this->load->library('form_validation');
	 
	    $this->form_validation->set_rules('empno', 'Employee No', 'required');
	    $this->form_validation->set_rules('bday', 'Birth Date', 'required');
	    $this->form_validation->set_rules('firstname', 'First Name', 'required');
	    $this->form_validation->set_rules('lastname', 'Last Name', 'required'); 
	    $this->form_validation->set_rules('gen', 'Gender', 'required');  
	  
	   if ($this->form_validation->run() == FALSE)
      	{
         	$this->add_view();
      	}
      	else
      		{
	   			$empno= $this->input->post('empno');
	   			$bday= $this->input->post('bday');
	   			$firstname=$this->input->post('firstname');
	   			$lastname= $this->input->post('lastname');
	   			$gen= $this->input->post('gen');
 
	   
		$this->load->model('manag_model');
		$this->manag_model->add_emp($empno, $bday, $firstname, $lastname, $gen);
   		$data['main_content'] = 'confirm';
		$this->load->view('includes/template', $data);
      }
	 	  
    }

	
	public function delete_view() {

		$data['main_content'] = 'delete_view';
		$this->load->view('includes/template', $data);	
	}		

	public function delete_controller() {

		$this->load->library('form_validation');
	 
	  	$this->form_validation->set_rules('empno', 'Employee No', 'required');
	  
	  	   if ($this->form_validation->run() == FALSE)
      		{
         		$this->delete_view();
      		}

      		else
      			{	
					$empno=$this->input->post('empno');

					$this->load->model('manag_model');
					$this->manag_model->delete_emp($empno);
					$data['main_content'] = 'confirm';
					$this->load->view('includes/template', $data);
        			
				}
	}

}

?>