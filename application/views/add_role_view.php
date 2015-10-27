<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="http://localhost/CI_SDLC/css/team.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <script type="text/javascript" src="<?php echo base_url("assets/js/._jquery-1.8.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/._bootstrap.min.js"); ?>"></script>
    
	<title>Add</title>
  <style type="text/css">
  div.rmarg {
    margin-left: 7cm;
     }
  </style>
</head>
<body>
   <!--  <div id="menu" class="rmarg">
        <ul>
          <li><a href="#">Add Role</a></li>
          <li><a href="#">Edit Role</a></li>
          <li><a href="#">Delete Role</a></li>
          <li><a href="#">List Roles</a></li>
        </ul>
    </div> -->
    <br /><br />
    <div id="add_form" class="rmarg">
      <h2 style="color:#FF0099">Add Role</h2>
      <?php echo validation_errors(); ?>
      <?php echo form_open('roles/addrole'); ?>
<!--       echo validation_errors();
 -->      <?php echo form_label('Description :') ?>
      <?php echo form_input(array(
      'id' => 'desc',
      'name' => 'desc',
      'placeholder' => 'The role description' ));?>
      <br /><br />
      
      <!-- <?php //echo form_label('Add role to the team :') ?> -->
<!--       <input type="text" name="desc" id="desc" />
 -->      
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary', 'style' => 'margin-left: 2cm;')); ?>
      <?php echo form_close(); ?>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>


</body>

