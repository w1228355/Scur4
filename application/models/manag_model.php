<?php

class Manag_model extends CI_Model {

	function update_emp($empno, $jobtitle) {
    
    $data = array(
               'title' => $jobtitle,

            );

    $this->db->where('emp_no', $empno);
    $this->db->update('titles', $data); 
}	


 function add_emp($empno, $bday, $firstname, $lastname, $gen) {

    $data = array(
      'emp_no' => $empno ,
      'birth_date' => $bday,
      'first_name' => $firstname,
      'last_name' => $lastname,
      'gender' => $gen,
      'hire_date' => date("Y-m-d"));

      $this->db->insert('employees', $data); 
}
		
 function delete_emp($empno) {

    $tables = array('employees', 'dept_manager','dept_emp','titles','salaries');
    $this->db->where('emp_no', $empno); 
  
    $this->db->delete($tables);

}

   
}



?>