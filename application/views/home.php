<html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
		<script type="text/javascript" src="<?php echo base_url("assets/js/._jquery-1.8.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/._bootstrap.min.js"); ?>"></script>
		
 	<title></title>
 	<style type="text/css">
 	label{display: block;}
 	div.rmarg {
    margin-left: 7cm;
     }
 	</style>
 </head>
 <body >
 <div class="rmarg">
 	<h2 style="color:#FF0099">Add Projects</h2>
  <?php echo validation_errors(); ?>
 	<?php echo form_open('site/create'); ?>
 	 <p>
<!--  	 	<?php //print_r($value); ?>
 --> 	 	<label for="description" style="color:#0066FF">Description</label>
 	 	<input type="text" name="description" id="description" value="<?php //echo $value->description; ?>">
 	 </p>
 	 <p>
 	 	<label for="start" style="color:#0066FF">Start</label>
 	 	<input type="datetime-local" name="start" id="start" value="<?php  //echo $value->start;?>">	
 	 </p>
 	 <p>
 	 	<label for="end" style="color:#0066FF">End</label>
 	 	<input type="datetime-local" name="end" id="end" value="<?php //echo $value->end;?>">	
 	 </p>
 	 <p>
 	 	<label for="status" style="color:#0066FF">Status</label>
 	 	<input type="text" name="status" id="status" value="<?php //echo $value->status;?>">	
 	 </p>
   <p>
    <label for="name" style="color:#0066FF">Name</label>
    <input type="text" name="name" id="name" value="<?php //echo $value->status;?>">  
   </p>
 	 <p>
 	 	<label for="teamid" style="color:#0066FF">TeamID</label>
 	 <!--<input type="text" name="teamid" id="teamid" value="<?php  echo $teamid;?>"> -->
 	 	<?php
 	 	foreach($team as $row )
          {
            $options [$row->id] = $row->description;
          } 
       
          echo form_dropdown('team', $options);
      ?>
 	 </p>
 	 <button id="submitbtn" style="margin-left: 2cm;" class="btn btn-primary" name="submitbtn">Submit</button>
 	 <br /><br />

 	<?php echo form_close(); ?>
 </div>



 	<div class="rmarg">
 		<?php foreach ($record as $value) { 
     // print_r($value ) ; die ; 
      ?>
 		<h4>
 		<span><?php echo $value->description; ?></span>
 		<span><?php echo anchor('site/delete/'.$value->id, 'Delete'); ?></span>
 		<span><?php echo anchor('site/edit/'.$value->id, 'Edit'); ?></span>
 		</h4>

 		<div>
 			<?php echo $value->start; ?>
 			<?php echo $value->end; ?>
 			<?php echo $value->status; ?>
 			<?php echo $value->teamid; ?>
 		</div>	

 		
 		
 		<?php } ?>
    <br /><br />
 	</div>
 </body>
</html>