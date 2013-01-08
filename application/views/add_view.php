<?php echo anchor('manag_login', 'Logout'); ?>

<div>
      <?php echo anchor('manag_site/update_view', 'Update Employee'); ?>
      <?php echo anchor('manag_site/manag_area', 'Go Back'); ?>
      <?php echo anchor('manag_site/delete_view', 'Delete Employee'); ?>
</div>

<fieldset id= "Add_emp">   
	<legend> Add Employee </legend>

<form action="http://www.ecwm604.us/w1228355/index.php/manag_site/add_controller" method='POST'>

	
	<h3>Welcome</h3>
	<h4>To ADD an Employee, please fill in the form below...</h4>

    <label>Employee Number:</label><input id= 'empno' type=text name='empno'>
	<label>Birthday:</label><input id= 'bday' type=text name='bday' value='YYYY-MM-DD'>
	<label>First Name:</label><input id= 'firstname' type=text name='firstname'>    
	<label>Last Name:</label><input id= 'lastname' type=text name='lastname'>
	<label>Gender:</label><input id= 'gen' type=text name='gen'>  
 
    <input type="submit" value="Add Employee">
</form>

</fieldset>