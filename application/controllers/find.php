<?php

class Find extends CI_Controller {
	
	function index()
	{
		$data['main_content'] = 'v_search';
		$this->load->view('includes/template', $data);	
	}

	function findemp()
	{

       $this->load->model('vemp_model'); 
       $data['query']=$this->vemp_model->find_dept();
       $this->load->view('includes/header');
       $this->load->view('vsearch_results',$data);
       $this->load->view('includes/footer');

  	}


    function detailed_emp()
	{

       $this->load->model('emp_model'); 
       $data['query']=$this->emp_model->find_dept();
       $this->load->view('includes/header');
       $this->load->view('esearch_results',$data);
       $this->load->view('includes/footer');

  	}

    function verydetailed_emp()
    {

       $this->load->model('manag_model'); 
       $data['query']=$this->manag_model->find_dept();
       $this->load->view('includes/header');
       $this->load->view('msearch_results',$data);
       $this->load->view('includes/footer');

    }


}

?>