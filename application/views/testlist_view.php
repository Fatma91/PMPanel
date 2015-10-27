<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  div.rmarg {
    margin-left: 7cm;
     }
  </style>
</head>
<body>
  <div class="rmarg">
      <table  class="table table-striped table table-hover table table-condensed">
        <tr>
          <th>User_Id</th>
          <th>Email</th>
          <th>Full_Name</th>
          <th>Login_Name</th>
          <th>Password</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>

        <?php
         foreach($users as $user)
          {  
                     
            
              echo "<tr>";    
              echo "<td> ".$user['id'] ."</td>"; 
              echo "<td>".$user['email']."</td>";
              echo "<td> ".$user['full_name'] ."</td>"; 
              echo "<td>".$user['login_name'] ."</td>";
              echo "<td> ".$user['password'] ."</td>"; 
              echo "<td>";?>
             
              <?php 
               $url="/CI_SDLC2/index.php/test1/editUsers?id=".$user['id'];?>
                <a href="<?php  echo $url;?>" class="btn btn-primary">EDIT</a>
                
              <?php
              echo "</td>";
              
              
               $url2="/CI_SDLC2/index.php/test1/deleteUser?id=".$user['id'];

              echo "<td>"; ?>
              <a href="<?php  
                    echo $url2; ?>"  class="btn btn-danger">DELETE
              </a>
              <?php 
              echo "</td>";
              echo "</tr>";

          }
          echo "</table>";                               
        ?>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   </div>     
</body>
</html>