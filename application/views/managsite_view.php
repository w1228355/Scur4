<?php echo anchor('emp_login', 'Logout'); ?>

<div>
      <?php echo anchor('manag_site/update_view', 'Update Employee'); ?>
      <?php echo anchor('manag_site/add_view', 'Add Employee'); ?>
      <?php echo anchor('manag_site/delete_view', 'Delete Employee'); ?>
</div>

<fieldset id= "Emp_Search2">  
	<legend> Search Facility For Managers </legend>

<form action="http://www.ecwm604.us/w1228355/index.php/find/verydetailed_emp" method='GET'>

	
	<h3>Welcome</h3>
	<h4>To search for an Employee, please provide at least ONE of the following...</h4>

    <label>First name:</label> 		   <input type=text name='firstname'>
    <label>Last name:</label>          <input type=text name='lastname'>
    <label>Department Name:</label>    <input type=text name='dept'>
    <label>Current Job Title:</label>  <input type=text name='jobtitle'>
    <input type="submit" value="Begin Search">
    <input type="reset" value="Clear">


</form>

</fieldset>


