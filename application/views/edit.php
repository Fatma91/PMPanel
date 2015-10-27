<html>
<head>
	<title></title>
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
		<h2 style="color:#FF0099">EDIT Project</h2><br />
 	<?php echo form_open('site/update'); foreach ($record as $value) {?>
 	<input type="hidden" name="id" title="id" value="<?php echo $value->id; ?>" >
 	 <p>
 	 	<label for="description" style="color:#0066FF">Description</label>
 	 	&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="description" id="description" value="<?php echo $value->description; ?>">
 	 </p>
 	 <p>
 	 	<label for="start" style="color:#0066FF">Start</label>
 	 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="margin-left: 1cm;" name="start" id="start" value="<?php echo $value->start;?>">	
 	 </p>
 	 <p>
 	 	<label for="end" style="color:#0066FF">End</label>
 	 	&nbsp;&nbsp;&nbsp;<input type="text" style="margin-left: 1.5cm;" name="end" id="end" value="<?php echo $value->end;?>">	
 	 </p>
 	 <p>
 	 	<label for="status" style="color:#0066FF">Status</label>
 	 	&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="margin-left: 1cm;" name="status" id="status" value="<?php echo $value->status;?>">	
 	 </p>
 	 <p>
 	 	<label for="teamid" style="color:#0066FF">TeamID</label>
 	 	&nbsp;&nbsp;<input type="text" style="margin-left: 1cm;" name="teamid" id="teamid" value="<?php echo $value->teamid;?>">	
 	 </p>
 	 <button id="submitbtn" style="margin-left: 4cm;" class="btn btn-primary">Submit</button>

 	<?php } echo form_close(); ?>
 	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
 </div>

</body>
</html>