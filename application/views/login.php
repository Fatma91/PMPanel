<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <script type="text/javascript" src="<?php echo base_url("assets/js/._jquery-1.8.3.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/._bootstrap.min.js"); ?>"></script>
    
  <style type="text/css">
  div.rmarg {
    margin-left: 7cm;
     }
  </style>
</head>
<body>
  <div class="rmarg">
<h1 style="color:#FF0099">LOgin</h1>
<?php
		// echo "helloo";
	echo form_open('login/index');

	echo validation_errors();
	echo "<P> Email &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;";
		echo form_input('email');
	echo "</p>";
	echo "<P> Password &nbsp;";
		echo form_password('password');
	echo "</p>";
	echo "<P>";
		echo form_submit('login_submit','Login');
	echo "</p>";

	echo form_close();


?>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
</html>