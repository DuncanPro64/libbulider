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
             .<img src='icons/icon_error1.gif' alt='image' class='photo' style='width: 20px; height: 20px;border-radius: 300px; margin-top: 1px;' style='align-text:center;'> <link rel='stylesheet' href='../css/bootstrap.min.css'><br> <a href='manageAdmin.php'>Home</a></div>";
          $error = 1;
          exit();

}
include('Dbconnection.php');
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$service_Id=$_POST['service_Id'];
			
			if(!$update=mysqli_query($con, "UPDATE admin SET profile_pic = '$location' WHERE username='$service_Id'")) {
			
				echo mysqli_error();
				
				
			}
			else{
			
			header("location:manageAdmin.php");
			exit();
			}
			}
	}


?>