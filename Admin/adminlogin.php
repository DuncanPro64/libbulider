	<?php require_once('../User/static.php');
		/*if(!isset($_SESSION)) {
		session_start();
		}*/
		if (isset($_SESSION['SESS_NAME'])!="") {
			header("Location:admin.php");
		}
	?>
    <body style="background-image: url('../images/download.png');">
    </body>
	<br>
	<center>
	<legend> <h3 style="color: orange;font-family:helvetica;font-size: 35px;">Construction and Maintenance <br><br>  Adminstrator  </h3></legend>
	<br>
	</center>
	<?php global $nam; echo $nam; ?>
	<?php global $error; echo $error; ?>
	<br><br>


		<div class="container" style="border: none;">
			<div class="row">
				<div class="col-md-5 offset-md-4">
				<!-- Default form login -->
				<form class="text-center border border-light p-5" action="../Admin/loginExec.php" method="post">
    			<p class="h4 mb-4">Administrator only</p>
    			<img src="../images/download.png" alt="Construction and Maintenance" width="280" height="200">
<br><br>
    			<!-- Email -->
    			<input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="username" style="border-color: green;">
<br><br>
    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password" style="border-color: blue;">
   
        <div>
    <div class="d-flex justify-content-around">
        <div><br><br><br>


            


        </div>
        </div>
        <div>

        	<!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <hr>
        <br>        
        
 </div>
       
    </div>
    <!-- Sign in button -->
    <button class="btn btn-warning btn-block my-4" type="submit" name="login">Sign in</button>

    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>

<br>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
       
</form>
</div>
</div>
</div>
</body>

<style>
body {
 background-color:8FBC8F;
 background-image: url("../images/download.png");
}
 *{ margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}

form, .content {
	width: 35%;
	margin: 10px auto;
	padding: 20px;
	border: 4px solid #B0C4DE;
	background: limegreen;
	border-radius: 0px 0px 10px 10px;
	align-content: center;

}

.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}

body {
  	background-color: #435165;
}
label,input {
 display: block;
 width: 300px;
 height: 40px;
 float: left;
 margin-bottom: 5px;
}

label {
 text-align: right;
 width: 50px;
 padding-left: auto;
 padding-right: 10px;
}
body { margin:50px 0px; padding:0px;
    display: flex;
    justify-content: center;
    margin-top: 5%;
    align-items: center;
    text-align: center;
}
form {
	display: inline-block;
   margin-left:auto;
   margin-right:auto;
   width:300px;
}
</style>
   
