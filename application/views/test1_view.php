<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
		<script type="text/javascript" src="<?php echo base_url("assets/js/._jquery-1.8.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/._bootstrap.min.js"); ?>"></script>
		<title>nutitle</title>
		<style type="text/css">
 	div.rmarg {
    margin-left: 7cm;
     }
 	</style>
	</head>	
	<body>
		<div class="rmarg">
				<h2 style="color:#FF0099">ADD User</h2>
				<?php echo validation_errors(); ?>
				<?php echo form_open('test1/addUsers'); ?>
					<p>
						<label for="email" style="color:#0066FF">Email :</label>
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="margin-left: 1cm;" name="email" id="email" />
					</p>

					<p>
						<label for="full_name" style="color:#0066FF">Full Name :</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="full_name" id="full_name" />
					</p>

					<p>
						<label for="login_name" style="color:#0066FF">Login Name :</label>
						&nbsp;&nbsp;&nbsp;<input type="text" name="login_name" id="login_name" />
					</p>

					<p>
						<label for="password" style="color:#0066FF">Password :</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password" />
					</p>

					<p>
						<input type="submit" id="submit" name="submit" style="margin-left: 4cm;" class="btn btn-primary" value="Submit" />
					</p>


				<?php echo form_close(); ?>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		</div>		
	</body>

</html>

</html>