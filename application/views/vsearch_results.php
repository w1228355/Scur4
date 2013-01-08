<?php echo anchor('find', 'Go Back to Search Entry'); ?>

<div id = "vresults_table">

<h4> The following matched your criteria...</h4>
	<table class="v_search" border="1">
    	<tr>
        	<th>First Name</th>
            <th>Last Name</th> 
            <th>Department Name</th>
            <th>Title</th>
        </tr>
                       
<?php foreach($query as $row) {?>

        <tr>
            <td><?php print $row->first_name; ?></td>
            <td><?php print $row->last_name; ?></td>
            <td><?php print $row->dept_name; ?></td>
            <td><?php print $row->title; ?></td>

                       
        </tr>
<?php }?>

    </table>
            
            JSON OUTPUT: <?php echo json_encode($query) ?> 

</div>

