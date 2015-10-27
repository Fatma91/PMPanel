<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="http://localhost/CI_SDLC2/css/team.css" rel="stylesheet" type="text/css">
	<title>Add Team</title>
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
    <!-- <div id="menu" class="rmarg">

        <ul>
          <li><a href="<?php echo base_url() ;?>teams/Add_Team/">Add team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Edit_Team/">Edit team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/Delete_Team/">Delete team</a></li>
          <li><a href="<?php echo base_url() ;?>teams/List_Teams/">List teams</a></li>
        </ul>
    </div> -->

    <div id="add_form" class="rmarg">
      <h2 style="color:#FF0099">Add Team</h2>
      <?php echo validation_errors(); ?>
      <?php echo form_open('teams/Add_Team/'); ?>
      <?php echo form_label('Description :') ?>
      <?php echo form_input(array('id' => 'desc','value' =>'','name' => 'desc','placeholder' => 'The team description' ))?>
      <br /><br />
      <?php echo form_label('Team Name :') ?>
      <?php echo form_input(array('id' => 'tname','value' =>'','name' => 'tname','placeholder' => 'The team name' ))?>
      <br /><br />
      <?php echo form_label('Add user to the team :') ?>
      <?php  
         
      //   $ids=array();
         foreach($result as $row )
          {
            $options [$row->id] = $row->full_name;
          } 
       
          echo form_multiselect('username[]', $options);
      ?>
      <br /><br />
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary', 'style' => 'margin-left: 2cm;')); ?>
      <?php echo form_close(); ?>
      <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>


</body>

