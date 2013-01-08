<?php

class Emp_model extends CI_Model {

	function find_dept() {
   
   $this->db->select('employees.emp_no, employees.first_name, employees.last_name, employees.gender, 
                      departments.dept_no, departments.dept_name, titles.title');

	$inputs = $this->input->get(); // you get an Associative array of post data

	extract($inputs); // will extract variables from Associative array.

	$where = array();

	if(strlen($firstname))
 		{ 
   			$where['first_name'] = $firstname;
 		}

   if(strlen($lastname))
 		{ 
   			$where['last_name'] = $lastname;
 		}

   if(strlen($dept))
 		{ 
   			$where['dept_name'] = $dept;
 		}

  if(strlen($jobtitle))
 		{ 
   			$where['title'] = $jobtitle;
 		}

 	$this->db->where($where);
 	
   	$this->db->join('dept_emp', 'dept_emp.emp_no = employees.emp_no');
   	$this->db->join('departments', 'departments.dept_no = dept_emp.dept_no');
   	$this->db->join('titles', 'titles.emp_no = employees.emp_no');
	  $query = $this->db->get('employees');
   
   if($query->num_rows > 0)
    {
        return $query->result();

    }
    	else 
    	{
    		redirect('emp_site/emp_area');
    	}
}	
		
   
}



?>