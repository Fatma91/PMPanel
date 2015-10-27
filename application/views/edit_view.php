<html>
<head>
	<title>test</title>
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
		<h2 style="color:#FF0099">EDIT Team</h2>
		 <?php  foreach ($result as $value) 
		   {?> 
		     <?php echo form_open('teams/Edit_Team/'.$value['id']);?>
		     <?php echo form_label('Description :')?>
		     <?php echo form_input(array('name' => 'desc','value' =>$value['description']))?>
		     <br /><br />
		     <?php echo form_label('Team Name :')?>
		     <?php echo form_input(array('value' =>$value['name'],'name' => 'tname'))?>
		     <br /><br />
		     <?php echo form_label('Add user to the team :') ?>
     <?php  
         $i=0; 
         //print_r($oldusers) ; die ; 
         foreach($oldusers as $row )
          { 
            
            $names[$i]= $row['id'];
            $i++;

          } 
        //  die;
         //var_dump($names);
         foreach($users as $row )
          {
            $options [$row->id] = $row->full_name;
          } 
       
          echo form_multiselect('username[]', $options,$names);
      ?>
		     <?php echo form_submit(array('name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-primary', 'style' => 'margin-left: 2cm;')); ?>
		 	<?php } 
		 	echo form_close(); ?>
		 	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  </div>

</body>
</html>

