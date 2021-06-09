<?php
include 'static.php';
require 'Dbconnection1.php';
$email_address="";
$phonenumber="";
$location="";
$first_name="";
$last_name="";
$business="";
$response="";
$business_nature="";

if(isset($_POST['send'])){
    $email_address=$_POST['email'];
     $phonenumber=$_POST['phonenumber'];
      $location=$_POST['location'];
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $business=$_POST['business'];
     $response=$_POST['response'];
    $business_nature=$_POST['business_nature'];
        
}
    $user=mysqli_query($db,"INSERT INTO user(first_name,last_name,email_address,phone_number,location,business_nature,business,response) VALUES ('$first_name','$last_name','$email_address','$phonenumber','$location','$business_nature','business','$response')") or die(mysqli_error($db));

    $_session['message']="You submitted Successfully.";
     
?>

<form method="POST" id="myform" name="myform" action="register.php"  class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Register</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname"  name="fname" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="phonenumber">Phone Number</label> 
                  <input type="number" id="phonenumber" name="phonenumber" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="location">location</label> 
                  <input type="text" id="location" name="location"  class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="business_nature">Select type of Business you have</label> 
                 <select name="business_nature" name="business_nature" class="form-control" required>
                      
                        
                       <option>Physical Business</option>
                       <option>Online Business</option>
                       
                   </select>
                 
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="business">Describe your Business</label> 
                  <textarea name="business" id="business" cols="30" rows="7" class="form-control" placeholder=" Describe your Business" required></textarea>
                </div>
              </div>
            <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="response">Have you ever asked a professional to manage your Business</label> 
                 <input type="radio" name="response" value="YES" id="yes" checked="checked" / style="height:50%;">
                                    <label for="yes">YES</label>
    
                                    <input type="radio" name="response" value="NO" id="no" / style="height:50%;">
                                    <label for="no">NO</label>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="submit Details" name="send" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
