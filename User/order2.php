<?php

    session_start();
   
  $db = mysqli_connect('localhost', 'root', '', 'libbuilder');
  //initilalize variables
  $adress="";
    $name="";
      $type="";
  $Longitude="";
  $Latitude="";
  $address_id=0;
  
  $update= false;
  if(isset($_POST['save'])){
    $adress=$_POST['adress'];
    $Longitude=$_POST['Longitude'];
    $Latitude=$_POST['Latitude'];
      $name=$_POST['name'];
        $type=$_POST['type'];
    

    mysqli_query($db,"INSERT INTO address(adress, Longitude,Latitude,name,type) VALUES ('$adress','$Longitude','$Latitude' ,'$name','$type')");
    $_session['message']="You Ordered successfully.";
    //header('location:home.php');
  }
  $id=$_GET['service_Id'];
  $material_id=$id;
  
  $result = mysqli_query($db, "SELECT * FROM material where rawmat_id='$material_id' and quantity>0");
    while($row = mysqli_fetch_array($result))
      {
        $image=$row['profile_pic'];

           $service_Id= $row['rawmat_id'];
           $service_tag= $row['material_name']; 
           $description=$row['description']; 
            $available_space= $row['quantity']; 
             
              $price=$row['unit_price']; 
               
          
      }
      
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/adminn.css">
<!--img src="../public/images/<?php echo $image ?>" style="height: 100%; width: 75%; margin-left: %;margin-top: 5%;">-->
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="../css/mountainn.css">
   <link rel="stylesheet" href="../css/styles1.css">
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <title></title>
</head>

 <?php $id=$_GET['service_Id'];?>
 
<div class="container">
  <div class="row">
    <div class="col-md-5 offset-md-4">
    <!-- Default form login -->
    <form class="text-center border border-light p-5" action="reg_action.php" method="post" style="align:left; margin-right: 5%; font-size:10px; width: 100%;">

      <p class="h4 mb-4">HIRE</p>

      <!-- Email -->
      <img  style=" width: 200px; height: 300px" src="../images/<?php  echo $image ?>" alt="material" class="material-image"><br>
  <tr style="font-weight:bold; color:black;text-decoration-color:grey;font-size:;text-align:left;  ">NAME</tr>:<?php echo $service_tag ?><br>
<tr style="font-weight:bold; color:black;text-decoration-color: grey;font-size: ;text-align:left; ">DESCRIPTION</tr>:<?php echo $description ?><br>

  <tr style="font-weight:bold; color:black;text-decoration-color: grey;font-size: ; text-align:left;">Price</tr>:Ksh<?php echo $price ?>/=<br>

 

 <a href='orderexecute.php?material_id=<?php echo $service_Id ?>' class="btn btn-info btn-block my-4"  >  ORDER</a>
</div>
 



   
</div>



</form>



</div>
</div>
</div>

 
</div>
 

</body>
</html>
