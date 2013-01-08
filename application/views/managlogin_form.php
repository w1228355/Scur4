<?php echo anchor('home_controller', 'Go Back Home'); ?>

<div id = login_form>
	<h2>Please Login..</h2>

	<?php

	echo form_open('manag_login/validate_account');
	echo form_label('Username:', 'username');
	echo form_input('username');
	echo form_label('Password:', 'password');
	echo form_password('password');
	echo form_submit('submit', 'Login');
	
	?>

</div>