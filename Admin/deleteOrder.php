<?php
include'loginExec.php';
if (!isset($_SESSION['user'])) {
  header("Location: ../User/homepage.php");
}
else{
  $role=$_SESSION['user']['role'];

}
include('loginerror.php');
?>


        
        
        
<?php
//including the database connection file
include("../classes/Crud.php");
include('../User/Dbconnection.php');

  $id = $_REQUEST['raword_id'];

//getting userid of the data from url
  
$id = $_GET['raword_id'];
   if (isset($_POST['delete'])){
    
if( $role=='SuperAdmin'){
          
        $users=mysqli_query($con ,"DELETE FROM myorder WHERE raword_id='$id'");
     }
     else{
      echo "<div class='alert alert-danger tex-center' style='width: 30%; margin-left: 34%;margin-top: 5%;text-align:center; '>YOU ARE NOT ALLOWED TO DELETE<br> CONSULT YOUR SUPER ADMIN.<img src='../icons/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'> <link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.min.css'><br> <a href='completeorder.php'>Home</a></div>
               ";
      exit();
     }
     

if ($users) {
   
   echo "<div class='alert alert-success tex-center' style='width: 30%; margin-left: 34%;margin-top: 5%;text-align:center;'>Order Deleted Successfully.<img src='../icons/action_check.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'><br> <a href='completeorder.php'>Home</a></div>
               ";
}

else{
    echo "Error: ".$users."<br />". $con->error;
    }

        }
else{

            $services = "select * from myorder where raword_id='$id'";
            $results = $con->query("$services");
            $product = $results->fetch_assoc();
            $service_tag= $product['order_number'];
            $service_Id = $product['order_id'];

                echo "
                <body class='ml-4 mr-4' style='margin-top: 10%; background: ;'>

        
            <form method='post'>

      
     
    
                <div class='alert alert-warning tex-center' style='background:;width:30%;position:center;margin-left:35%;padding-bottom:3px; border: ;'  >
                <h4 class='text-center' style='color:red;'>Confirm order Deletion!</h4>
                
                   <div class='alert alert-warning tex-center' style='text-align:center;'><img src='../icons/icon_error1.gif' alt='image' class='photo' style='width: 30px; height: 30px;border-radius: ; margin-top: 3px;text-align:center; '><br>  You have requested to delete <br>Order: <b>$service_tag</b>,<br> Order_Id.  :<tt class='font-italic font-weight-bold'>$service_Id</tt>.<br> Are you sure?</div>
                    <div class='text-center mt-2'>
                    
                        <a href='completeorder.php' class='btn btn-success'>Cancel</a>
                        <input type='submit' name='delete' id='delete' value='Delete'  class='btn btn-danger'/> 
                    </div>
                </div>
            </form> ";
        }
?>

<!DOCTYPE html>
<html>
<head>
  <style>
      .error{
        color: #ff726f;
      }
      .success{
        color: #90ee90;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title></title>
</head>
<body>

</body>
</html>