<?php

class Home_Controller extends CI_Controller {
	
	function index()
	{
		$data['main_content'] = 'home_view';
		$this->load->view('includes/template', $data);	
	}

}

?>