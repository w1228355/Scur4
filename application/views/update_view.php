<?php echo anchor('emp_login', 'Logout'); ?>

<div>
      <?php echo anchor('manag_site/manag_area', 'Go Back'); ?>
      <?php echo anchor('manag_site/add_view', 'Add Employee'); ?>
      <?php echo anchor('manag_site/delete_view', 'Delete Employee'); ?>
</div>

<fieldset id= "Update_emp">   
	<legend> Update Employee </legend>

<form action="http://www.ecwm604.us/w1228355/index.php/manag_site/update_controller" method='POST'>

	
	<h3>Welcome</h3>
	<h4>To UPDATE an Employee, please provide with the CORRECT Employee's Number followed by the
		information to be updated...</h4>

    <label>Employee's Number:</label><input id= 'empno' type=text name='empno'>
    <label>New Job Title:</label><input type=text id='jobtitle' name='jobtitle'>
    <input type="submit" value="Update">
</form>

</fieldset>