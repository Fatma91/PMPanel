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
    <h2 style="color:#FF0099">List Roles</h2>
      <table  class="table table-striped table table-hover table table-condensed">
        <tr>
          <th>
          Role_Id
          </th>
          <th>
          Role_Description
          </th>
          <th>
          Edit
          </th>
          <th>
          Delete
          </th>
        </tr>

        <?php
         foreach($roles as $role)
          {  
                     
            
            echo "<tr>";    
            echo "<td> ".$role['id'] ."</td>"; 
            ?>
      <!--        <td><?php print_r($role); ?></td>
       -->      <?php
            echo "<td>".$role['description'] ."</td>";

            // echo '<td><a href="update_role".$role['id'].>Edit</a></td>';
            $url="/CI_SDLC2/index.php/roles/update_role?id=".$role['id'];?>
               <td> <a href="<?php  echo $url;?>" class="btn btn-primary">EDIT</a>
                <?php echo"</td>";

                $url2="/CI_SDLC2/index.php/roles/delete_role?id=".$role['id'];?>
            <td> <a href="<?php  echo $url2;?>" class="btn btn-danger">Delete</a>
                <?php echo"</td>";
            echo "</tr>";                            
          }
          echo "</table>";                               
        ?>
        
  </div>      

</body>
</html>

