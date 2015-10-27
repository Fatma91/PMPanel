<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link href="http://localhost/CI_SDLC2/css/team.css" rel="stylesheet" type="text/css">
	<title>Add Project</title>
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
    
    <div id="add_form" class="rmarg">
      <h1 style="color:#FF0099">Add Project</h1>
      <?php $this->load->library('form_validation'); ?>
      <!-- <div class='col-xs-8 col-xs-offset-2' style='color:red;font-size:1000;'><?php echo validation_errors();?></div> -->

      
          <div class='rthty'><?php echo validation_errors();?></div> 
       <?php echo form_open('projects/Add_Project/'); ?>
      <?php echo form_label('Description :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>'','name' => 'desc','placeholder' => 'The project description' ))?>
      <br /><br />
      <?php echo form_label('Start Time :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('type' => "datetime-local",'value' =>'','name' => 'start','placeholder' => 'The start time of project' ))?>
      <br /><br />
      <?php echo form_label('End Time :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('type' => "datetime-local" ,'value' =>'','name' => 'end','placeholder' => 'The end time of' ))?>
      <br /><br />
      <?php echo form_label('Project Status :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>'','name' => 'status','placeholder' => 'The project status' ,'required'=>'required'))?>
      <br /><br />
      <?php echo form_label('Project Name :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>'','name' => 'pname','placeholder' => 'The project name' ))?>
      <br /><br />
      <?php echo form_label('Add team for this project :') ?>
      <?php  
         foreach($teams as $row )
          {
            $options [$row->id] = $row->name;
          } 
       
          echo form_multiselect('teams[]', $options);
      ?><br /><br />
      <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary', 'style' => 'margin-left: 2cm;')); ?>
      <?php echo form_close(); ?>
      <br /><br /><br /><br />

    </div>


</body>

