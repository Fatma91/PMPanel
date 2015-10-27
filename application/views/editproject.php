<html>
<head>
	<title>Edit</title>
	<link href="http://localhost/CI_SDLC2/css/team.css" rel="stylesheet" type="text/css">
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
  <h1 style="color:#FF0099">Edit Project</h1>
 <?php  foreach ($result as $value) 
   {?> 
    <div class='rthty'><?php echo validation_errors();?></div>
      <?php echo form_open('projects/Edit_Project/'.$value['id']); ?>
      <?php echo form_label('Description :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>$value['description'],'name' => 'desc'))?>
      <br /><br />
      <?php echo form_label('Start Time :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('type' => "datetime-local",'value' =>$value['start'],'name' => 'start'))?>
      <br /><br />
      <?php echo form_label('End Time :') ?>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('type' => "datetime-local",'value' =>$value['end'],'name' => 'end' ))?>
      <br /><br />
      <?php echo form_label('Project Status :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>$value['status'],'name' => 'status'))?>
      <br /><br />
      <?php echo form_label('Project Name :') ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_input(array('value' =>$value['name'],'name' => 'pname'))?>
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
 	<?php } 
 	echo form_close(); ?>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
 </div>

</body>
</html>

