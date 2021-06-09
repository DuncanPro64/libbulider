 
<?php
include'loginExec.php';
if (!isset($_SESSION['user'])) {
  header("Location: ../User/homepage.php");
}
else{
     $role=$_SESSION['user']['role'];
}
if($role!=='SuperAdmin'){
  echo "<div class='alert alert-danger tex-center' style='width: 30%; margin-left: 34%;margin-top: 5%;text-align:center; background-color:;color:red;'>You're not allowed to complete this action. Please contact Your SuperAdmin.
          <br>
             .<img src='../icons/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'> <link rel='stylesheet' href='../css/bootstrap.min.css'><br> <a href='manageAdmin.php'>Home</a></div>";
          $error = 1;
          exit();

}
include ('../User/Dbconnection.php');

       
               
	$username = $_POST['username'];
  $firstname = $_POST['firstname'];
	$lastname=$_POST['lastname'];
	$password=$_POST['password'];
	$role=$_POST['role'];


  
        $error = 0;
        $errfirstname = "";
        $errlastname ="";
         $errpassword="";
        $errrole= "";
       

        
         $Err="";
        //if(empty($firstname) or (empty($lastname)) or (empty($PhoneNumber)) or (empty($password))){
         // $Err= " Failed Update. Please Go back and correct as indicated below ";
          //$error = 1;

        //}
        if(empty($firstname)){  
          $errfirstname= "*Unfilled firstname.";
          $error = 1;
        }
         if(empty($lastname)){  
          $errlastname= "*enter lastname";
          $error = 1;
        }
        
        if(empty($password)){
          $errpassword = "* Enter password ";
          $error = 1;
        }
         if(empty($role)){
          $errrole= "*type role";
          $error = 1;
        }

        


     
        
        if($error == 0){

	$user=mysqli_query( $con,"UPDATE admin SET first_name='$firstname', last_name='$lastname', role='$role' , password='$password' WHERE username='$username'");

   if ($user){
    header("Location:manageAdmin.php");
   }
   else{
   	echo"failed to execute";
   }
 }

?>
<head>
     <link rel="stylesheet" href="../css/mountains.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Update Product</title>
    <style>
      .error{
        color: #ff726f;
        margin-left: 40%;
        padding: none;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
        font-size: 10px;
        text-align: center;


      }
      .success{
        color: #90ee90;
      }
      .Error{
        color: #ff726f;
        background: white;
        border-radius: ;
        width: 30%;
       padding: 5px;
       align-items: center;
        border-bottom: none;
        border-top: none;
        border-left: 1px solid red;
        border-right: 1px solid red;
      
      }
      
    </style>
  </head>

<?php
        if(isset($Err)){
          echo "<div class='Error'> <a href='admin.php'><img src='../icons/icon_error1.gif' alt='image' class='photo' style='width: 15px; height: 15px;border-radius: 300px; margin-top: 3%; '></a><br><h style='font-size: 10px;color:red; '><br>
          <img src='icons/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;margin-left:2%;'><br>
         $Err
          
          Failed Update.Please Go back and correct:
          </div>";

         
        
        }


      ?>
<?php
 if(isset($errtitle)){
          echo "<div class='error'>$errtitle</div>";
        }
        ?>
        <?php
     if(isset($errdescription)){
          echo "<div class='error'>$errdescription</div>";
        }
        ?>
        <?php
        if(isset($errsource_name)){
          echo "<div class='error'>$errsource_name</div>";
        }
        ?>
        
        <?php
         if(isset($errstatus)){
          echo "<div class='error'>$errstatus</div>";
        }
        ?>
        
    
    