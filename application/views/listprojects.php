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
<h1 style="color:#FF0099">List of Projects</h1>
<table  class="table table-striped table table-hover table table-condensed">
  <tr>
    <th>
    Project_Id
    </th>
    <th>
    Project_Description
    </th>
    <th>
    Project_Start
    </th>
    <th> 
    Project_End
    </th>
    <th>
     Project _Status
    </th>
    <th>
     Project_Name
    </th>
    <th>
    Edit Project
    </th>
    <th>
    Delete Project
    </th>
  </tr>
  <?php
   foreach($results as $project)
    {  
               
      echo "<tr>";    
      echo "<td> ".$project->id ."</td>"; 
      echo "<td>".$project->description ."</td>";
      echo "<td>".$project->start ."</td>";
      echo "<td> ".$project->end."</td>"; 
      echo "<td>".$project->status."</td>";
      echo "<td>".$project->name ."</td>";
      echo "<td>". anchor(base_url().'projects/Edit_Project/'.$project->id,'Edit','class="btn btn-primary"') ."</td>";
      echo "<td>". anchor(base_url().'projects/Delete_Project/'.$project->id,'Delete','class="btn btn-danger"') ."</td>";
      echo "</tr>";                            
    }
    echo "</table>";                               
  ?>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
</body>
</html>