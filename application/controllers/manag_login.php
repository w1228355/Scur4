<?php

class Manag_login extends CI_Controller {
	
	function index()
	{
		$data['main_content'] = 'managlogin_form';
		$this->load->view('includes/template', $data);	
	}


	function validate_account()
	{		
		$this->load->model('accounts_model');
		$query = $this->accounts_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('manag_site/manag_area');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}

}	


?>