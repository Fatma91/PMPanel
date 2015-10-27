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
      <h1>List of user in this team</h1>
      <table  class="table table-striped table table-hover table table-condensed">
        <tr>
          <th>
          User_Id
          </th>
          <th>
          User_Email
          </th>
          <th>
          User_Fullname
          </th>
          <th>
          User_Loginname
          </th>
          <th>
          User_password
          </th>
        </tr>
        <?php
         foreach($users as $user)
          {             
            echo "<tr>";    
            echo "<td> ".$user['id'] ."</td>"; 
            echo "<td>".$user['email'] ."</td>";
            echo "<td>".$user['full_name']."</td>";
            echo "<td>".$user['login_name'] ."</td>";
            echo "<td>".$user['password']."</td>";
            echo "</tr>";                            
          }
          echo "</table>";       

        ?>
        <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
   </div>     
</body>
</html>