           
<?php
include'loginExec.php';
if (!isset($_SESSION['user'])) {
  header("Location: ../User/homepage.php");
}
//including the database connection file
include("../classes/Crud.php");
include('../User/Dbconnection.php');

  
    
                    
        $users=mysqli_query($con ,"DELETE FROM myorder WHERE status='incomplete'");

$users1=mysqli_query($con ,"DELETE FROM hire WHERE status='incomplete'");
      header('Location:notifications.php');
       ?>