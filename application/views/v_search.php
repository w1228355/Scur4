<?php echo anchor('home_controller', 'Go Back Home'); ?>


<fieldset id= "Emp_Search">  
	<legend> Search Facility For Visitors </legend>

<form action="http://www.ecwm604.us/w1228355/index.php/find/findemp" method='GET'>

	<h4>To search for an Employee, please provide at least ONE of the following...</h4>

    <label>First name:</label> 		   <input type=text name='firstname'>
    <label>Last name:</label>          <input type=text name='lastname'>
    <label>Department Name:</label>    <input type=text name='dept'>
    <label>Current Job Title:</label>  <input type=text name='jobtitle'>
    <input type="submit" value="Begin Search">
    <input type="reset" value="Clear">

</form>

</fieldset>