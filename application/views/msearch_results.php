<?php echo anchor('manag_site/manag_area', 'Go Back to Search Entry'); ?>

<div>
      <?php echo anchor('manag_site/update_view', 'Update Employee'); ?>
      <?php echo anchor('manag_site/add_view', 'Add Employee'); ?>
      <?php echo anchor('manag_site/delete_view', 'Delete Employee'); ?>
</div>

<div id = "mresults_table">

<h4> The following matched your criteria...</h4>
	<table class="v_search" border="1">
    	<tr>
        	<th>Employee No</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Salary</th>
            <th>Date Hired</th>
            <th>Department Name</th>
            <th>Department No</th>
            
        </tr>
                       
<?php foreach($query as $row) {?>

        <tr>
            <td><?php print $row->emp_no; ?></td>
            <td><?php print $row->title; ?></td>
            <td><?php print $row->first_name; ?></td>
            <td><?php print $row->last_name; ?></td>
            <td><?php print $row->gender; ?></td>
            <td><?php print $row->birth_date; ?></td>
            <td><?php print $row->salary; ?></td>
            <td><?php print $row->hire_date; ?></td>
            <td><?php print $row->dept_name; ?></td>
            <td><?php print $row->dept_no; ?></td>

        </tr>
<?php }?>

    </table>


</div>