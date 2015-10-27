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
          <!--<?php //$this->load->view('layout/header'); ?>-->
          <h2 style="color:#FF0099">List Teams</h2>
        <? echo heading('List of teams'); ?>
        <table  class="table table-striped table table-hover table table-condensed">
          <tr>
            <th>
            Team_Id
            </th>
            <th>
            Team_Description
            </th>
            <th>
            Team_Name
            </th>
            <th>
            Edit
            </th>
            <th>
            Delete
            </th>
            <th>
            </th>
          </tr>
          <?php
           foreach($result as $team)
            {  
                       
              echo "<tr>";    
              echo "<td> ".$team->id ."</td>"; 
              echo "<td>".$team->name ."</td>";
              echo "<td>".$team->description ."</td>";
              echo "<td>". anchor(base_url().'teams/Edit_Team/'.$team->id,'Edit','class="btn btn-primary"') ."</td>";
              echo "<td>". anchor(base_url().'teams/Delete_Team/'.$team->id,'Delete','class="btn btn-danger"') ."</td>";
              echo "<td>". anchor(base_url().'teams/Team_Users/'.$team->id,'Users IN This Team') ."</td>";
              echo "</tr>";                            
            }
            echo "</table>";                               
          ?>
        <!--   <?php //$this->load->view('layout/footer'); ?>-->
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </div>
  </body>
</html>