<?php

class Accounts_model extends CI_Model {

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('accounts_info');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
}

?>