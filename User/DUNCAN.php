
<?php

require 'Dbconnection1.php';
$email_address="";
$first_name="";
$last_name="";
$subject="";
$message="";

if(isset($_POST['send'])){
    $email_address=$_POST['email_address'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $subject=$_POST['subject'];
    $message=$_POST['comment'];
    
    
         
    
     
        }

    $user=mysqli_query($db,"INSERT INTO message(subject,message,email_address,first_name,last_name) VALUES ('$subject','$message','$email_address','$first_name','$last_name' )") or die(mysqli_error($db));
    
if($user=true){
  echo 'posted';
}
    $_session['message']="Your message was received.";
    ?>
        





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ANESTOR &mdash; kenya's No.1 Consultancy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <html lang="en">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
    
    <meta name="google-signin-client_id" content="1063581793829-c521flu94erc965jr7qvqht6ucgu6jsh.apps.googleusercontent.com">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">ANESTOR CONSULTANCY<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>






                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="register.html">Menu One</a></li>
                        <li><a href="https://youth-in-business.blogspot.com">Blog</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                
                
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                
                <li><a href="https://youth-in-business.blogspot.com" class="nav-link">Youth In Business</a></li>
                <li class="social"><a href="https://www.facebook.com" class="nav-link"><span class="icon-facebook"></span></a></li>
                <li class="social"><a href="https://www.twitter.com" class="nav-link"><span class="icon-twitter"></span></a></li>
                <li class="social"><a href="https://www.linkedin.com" class="nav-link"><span class="icon-linkedin"></span></a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Finance Advisory</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">We help you create stratergies for eliminating financial risk and building wealth over a long time.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#contact-section" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a> 
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Marketting</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Let us market your business today buy giving it recognition and attention for your targetted audience.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>  
                </div>
              </div>


<div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Human Resource(HR)</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">We are responsible for hiring ,developing and looking after employees.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a> 
                </div>
              </div>




              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Risk Assessment</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">We help you determine the appropriate ways to eliminate the hazard,or control the risk when the risk cannot be eliminated.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>  
                </div>
              </div>


              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Data Analysis</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">With our experienced experts we analyze data to optimize and improve your customer experience.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>  
                </div>
              </div>







              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">Wealth coach</h1>
                <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Get clarity on where your money goes,addressing misconceptions around how to handle your money.</p>
                <div data-aos="fade-up" data-aos-delay="100">
                  <a href="#" target="_blank" class="btn  btn-primary mr-2 mb-2">Get In Touch</a>  <a href="https://www.gmail.com/" class="btn btn-info" role="button">Sign in with Gmail</a>
                </div>
              </div>

            </div>
          </div>
            
        </div>
      </div>


 
   <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 p-l-110 p-r-110 p-b-33">
        <form class="login100-form validate-form flex-sb flex-w">
          <span class="login100-form-title p-b-53" id="heading">
            Sign In With
          </span>
                   
                    
                    
          <a href="#" class="btn-face m-b-20" id="facebook">
            <i class="fa fa-facebook-official"></i>
            Facebook
          </a>

          <a href="#" class="btn-google m-b-20 g-signin2"  data-onsuccess="onSignIn" id="google">
          
          </a>
          <span class="login100-form-title p-b-53"> <img src="" id="myImg" style="border-radius:50%;">
                    <p id="p1"></p>
                      <p id="email"></p>
                      <a href="javascript:void(0);" onclick="signOut();" id="sing_out" style="visibility:hidden;color:blue;">Sign out</a>
                    </span>
          
          <!--<div class="p-t-31 p-b-9">
            <span class="txt1">
              Username
            </span>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      location.reload();
    });
  }
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
   
  var name=profile.getName();
  var imagepath=profile.getImageUrl();
 var email=profile.getEmail();
 document.getElementById("p1").innerHTML = name;
 document.getElementById("email").innerHTML =email;
 document.getElementById("myImg").src = imagepath;
 document.getElementById("heading").style.visibility = "hidden";
 document.getElementById("facebook").style.visibility = "hidden";
 document.getElementById("google").style.visibility = "hidden";
document.getElementById("sing_out").style.visibility = "show";
}
  </script>
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

 





















      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  


    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">A Consultancy firm Majoring in digital technology to maximise profits for micro-businesses in Kenya.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black mb-4">We Solve Your Financial Problem</h3>

            <p>Anestor Consultancy Limited is a reputable Kenyan firm incorporated in 2019, specializing in dairy value-chain analysis, environmental management, project management and strategic management. We assist dairy enterprises and companies in nearly every aspect of their business, both commercial and technical. We help our clients plan their business, develop and launch new products, understand and enter new markets, benchmark competitors and acquire companies.</p>

            
            
          </div>
        </div>    
        
      </div>  
    </div>

    <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Stratergy</h3>
            <p>No business thrives without strategy therefore in Anestor we create the best strategies for your business development.Recovery plans and helps your business keep profitability..</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Research</h3>
            <p>We carry out extensive Desktop and field research to inform us on the best decisions for your business,the best investment and identify  challenges facing your business..</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Data Analysis</h3>
            <p>Anestor has a team of young talented minds that will go through your business data,clean it up,visualise the data and make inferences that will guide your business  decision making</p>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/about_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Finance Advisory Is Our Priority</h3>
              <p>Talk to us today on best practices on how to spend well to avoid fraustrations.</p>
              
            </div>
              
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Officia quaerat eaque neque</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
              </ul>
              
            </div>

            
            
            
          </div>
        </div>
      </div>
    </div>

    

    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet Team</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Meet with the best experts in the country who ensure that dissapointment is not part of your journey here with Anestor.</p>
          </div>
        </div>
        <div class="row">
          

          
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Kaiara Spencer</h3>
                <span class="position">Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Dave Simpson</h3>
                <span class="position">Bank Teller</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ben Thompson</h3>
                <span class="position">Bank Teller</span>
              </div>
            </div>
          </div>

          
          
        </div>
      </div>
    </section>


    <section class="site-section" id="gallery-section" data-aos="fade">
      

      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Gallery</h2>
          </div>
        </div>

        
        
        <div id="posts" class="row no-gutter">
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/joe.png" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>

          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_3.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_4.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_5.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_1.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_2.jpg">
            </a>
          </div>

          
        </div>
      </div>

    </section>


    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Easy! register today with us and create an account and call us now,the rest is ours simple right?</p>
          </div>
        </div>
        
        <div class="row align-items-lg-center" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3">01. Online Applications</h2>
                <p>Cant make it to our offices?dont worry we can take care of things for you online</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">02. Get an approval</h2>
                <p>Our able team works fast to ensure no second gets lost on the way when serving you.</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              <div>
                <h2 class="section-title mb-3">03. Service delivery</h2>
                <p>We reply immediately to any queries you have for us</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>We analyze organizational practices ,identify weaknesses and recommend solutions.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/006-credit-card.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Financial Advisory</h3>
                <p>We help you create stratergies for eliminating financial risk and building wealth over a long time.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/002-rich.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Marketting</h3>
                <p>Let us market your business today buy giving it recognition and attention for your targetted audience.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/003-notes.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Wealth Coach</h3>
                <p>Get clarity on where your money goes,addressing misconceptions around how to handle your money</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/004-cart.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Risk assessment</h3>
                <p>We help you determine the appropriate ways to eliminate the hazard,or control the risk when the risk cannot be eliminated.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/005-megaphone.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Financial Management</h3>
                <p>Helping you plan ,organize ,direct and control your financial activities in a standard manner that suits your business.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Happy Customers</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;90% of our clients would recommend Anestor to you for customer service management, payroll processing and all technical solutions.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Thanks to Anestor now my retail business profit has risen by 60%!! in just six months ..am happy that i can pay back my workers and cater for my needs.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

         

        </div>
    </section>

    <section class="site-section bg-light" id="pricing-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h2 class="section-title mb-3">Pricing</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="pricing">
              <h3 class="text-center text-black">Web Development</h3>
              <div class="price text-center mb-4 ">
                <span><span>...</span> / once a lifetime</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>free 2 year hosting</li>
                <li>firebase notifications</li>
                <li class="remove">livechat integration</li>
                <li class="remove">whatsapp chat integration</li>
                <li class="remove">customer help desk/ visitor tracking</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-black">App Development</h3>
              <div class="price text-center mb-4 ">
                <span><span>...</span> / once a lifetime</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li></li>
                <li>free lifetime playstore account</li>
                <li>online push notifications</li>
                <li>live chat integration</li>
                <li class="remove">offline push notifications</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-black">Point of Sale System</h3>
              <div class="price text-center mb-4 ">
                <span><span>...</span> / once a lifetime</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Multi-store management</li>
                <li>Consistent and customizable reports</li>
                <li>Customer orders and Supplier orders</li>
                <li>Outstanding Inventory Management</li>
                <li>Integrated Supplier Purchases</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Can I accept both Paypal and M-pesa?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Does Anestor provide money back solutions?</h3>
              <p>Our team works hand in hand with every client to ensure our services are up to standard and you have satisfaction.</p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">Is Anestor a private or public servant company?</h3>
            <p>Anestor is a registerd private company in Kenya.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Is registering with Anestor a benefit?</h3>
              <p>We will be having seasonal seminars and engaging the youth in business creation.Those registered will have a chance of receiving quick dates before everyone else.</p>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">Where is Anestor located?</h3>
              <p>Rongai town.</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">What is your opening time?</h3>
              <p>On weekdays our office is open from 8.00am to 4.00pm,and on Saturday our office is open from 9.00am to 4.00pm .</p>
            </div>

            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-black h4 mb-4">How many accounts can i open with Anestor?</h3>
            <p>One account is just enough to ensure you dont miss out on any of our events.Incase of forgot password ,just reset in the Registration page and you will  be redirected to your former account</p>
            </div>
            
            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="text-black h4 mb-4">How long does it take to deliver a website/App?</h3>
              <p>Websites and apps with database connection/backend often take longer about 10 days.Those without often take shorter time.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/img_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            

            <div class="row">

              
              
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                  <div>
                    <h3>AI technologies and Systems</h3>
                    <p>We have virtual customer assistants powered by AI  that can be used to  improve the customer experience by reducing time to response.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                  <div>
                    <h3>Banking Consulation </h3>
                    <p>We advise you on your financial accounts and make best recommendations regarding on bank services.</p>
                    <p class="mb-0"><a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Blog</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="https://youth-in-business.blogspot.com/">Banking is good for business? Why?</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="https://youth-in-business.blogspot.com/">News</a></div>
              <p>Banking has been the reason for many settled projects and businesses beides aiding in education here in our country.</p>
              <p><a href="https://youth-in-business.blogspot.com/">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Find out how real estate is escalating in production.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="https://youth-in-business.blogspot.com/">News</a></div>
              <p>Most saccos and business corporates have started investing deeply in real estate.In the process,homeless people have had a chance to receive free homes.</p>
              <p><a href="https://youth-in-business.blogspot.com/">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Most farmers have started embracing the joy of fish keeping</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="https://youth-in-business.blogspot.com/">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="https://youth-in-business.blogspot.com/">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

   


    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <span>Kajiado county,Rongai town</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#">+254 714 843 475</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <a href="https://www.gmail.com">anestorken@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form name="comment"  class="p-5 bg-white" enctype="multipart/form-data" method="post" action="index.php" >
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" name="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="send" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>A Consultancy firm Majoring in digital technology to maximise profits for micro-businesses in Kenya.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">Terms</a></li>
                  <li><a href="#about-section" class="smoothscroll">Policy</a></li>
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3 footer-social">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://www.twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.icon-instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
<script>(function(){var pp=document.createElement('script'), ppr=document.getElementsByTagName('script')[0]; stid='TEN1czBid09OK2NMSWRTL1ZYTnB0dz09';pp.type='text/javascript'; pp.async=true; pp.src=('https:' == document.location.protocol ? 'https://' : 'http://') + 's01.live2support.com/dashboardv2/chatwindow/'; ppr.parentNode.insertBefore(pp, ppr);})();</script>

  
  </body>
</html>