<?php echo anchor('emp_login', 'Logout'); ?>

<div>
      <?php echo anchor('manag_site/update_view', 'Update Employee'); ?>
      <?php echo anchor('manag_site/add_view', 'Add Employee'); ?>
      <?php echo anchor('manag_site/manag_area', 'Go Back'); ?>
</div>

<fieldset id= "Delete_emp">   
	<legend> Delete Employee </legend>

<form action="http://www.ecwm604.us/w1228355/index.php/manag_site/delete_controller" method='POST'>

	
	<h3>Welcome</h3>
	<h4>To DELTE an Employee, please provide with the CORRECT Employee's Number...</h4>

    <label>Employee's Number:</label><input id= 'empno' type=text name='empno'>
    <input type="submit" value="Delete">
</form>

</fieldset>