<?php
session_start();
// connect to database

require 'Dbconnection.php';
$query= mysqli_query($con, "select count(*) as total from comment");
$result1 = mysqli_fetch_array($query);
$count = ($result1['total']+1 );

 $first_name="";
  $last_name="";
  $phone_number="";
  $email_address="";
  $comment="";
  $subject="";
  $comment_id= 'NC'.$count.'C';

  $update= false;
  if(isset($_POST['save'])){
    $email_address=$_POST['email_address'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
     $phone_number=$_POST['phone_number'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];
    
    
           }
    
     
    

    $user=mysqli_query($con,"INSERT INTO comment(comment_id,subject,description,  email_address,phone_number,first_name,last_name) VALUES ('$comment_id','$subject','$comment','$email_address','$phone_number','$first_name','$last_name' )") or die(mysqli_error($db));
    

    $_session['message']="Your message was received.";
  
           
    //header('location:home.php');
   
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lib home builders">
    <title>Lib Home Builders | Project</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/project.css">
</head>
<body>
    <nav style="background: #FF7435;height: 15%;">
        <div class="over"></div>
        <span class="logo">
            <img src="images/LIb.jpg" alt="logo image" class="logo-image">
            <article>
            <p>Lib Home</p>
            <p>Builders</p>
            </article>
        </span>


        <img src="icons/menu-svgrepo-com.svg" alt="menu" class="menu-icon mobile">


        <span class="links">
            <a href="homepage.php#top">
                <img src="icons/homepage.svg" alt="home" class="icon">
                Home
            </a>
            <div class="pro-link">
            <a href="project.php">
                <img src="icons/project-task.svg" alt="project" class="icon">
                Projects
                <img src="icons/triangle black and white.svg" alt="triangle" class="icon twist">
            </a>
                <!--dropdown functionality>-->
                <div class="more-projects">
                    <a href="project.php#upcoming"> Upcoming Projects</a>
                    <a href="project.php#active">Active Projects</a>
                    <a href="project.php#complete">Complete Projects</a>
                </div>
            </div>
            
            <div class="pro-link">
                <a href="equipment.php">
                    <img src="icons/wheelbarrow.svg" alt="project" class="icon">
                    Equipments
                    <img src="icons/triangle black and white.svg" alt="triangle" class="icon twist">
                </a>
                <div class="more-projects">
                    <a href="equipment.php#excavator">Excavator</a>
                    <a href="equipment.php#mixer">Cement mixer</a>
                    <a href="equipment.php#tractor">Wheel Tractor</a>
                    <a href="equipment.php#grader">Grader</a>
                </div>
            </div>

            <div class="pro-link">
                <a href="material.php">
                    Material
                    <img src="icons/triangle black and white.svg" alt="triangle" class="icon twist">
                </a>
                <div class="more-projects">
                    <a href="material.php#brick">Bricks</a>
                    <a href="material.php#sand">Sand</a>
                    <a href="material.php#cement">Cement</a>
                </div>
            </div>

            <a href="gallery.php">
                Gallery
            </a>
            <a href="blog.php">
                <img src="icons/comment-blog.svg" alt="blog" class="icon">
                Blog
            </a>
            <a href="about.php">
                About Us
            </a>
            <a href="#contact">
              Contact Us
            </a>
        </span>

      
    </nav>
    <main>
        <!-- upcoming  -->
        <?php
          $db = mysqli_connect('localhost', 'root', '', 'libbuilder'); 
$count = 1;
$result=mysqli_query($db,"SELECT *FROM libbuilder"); 
     
    
?>
    <section id="upcoming"> 
        <h2>Upcoming Projects</h2>
          <?php
    $db = mysqli_connect('localhost', 'root', '', 'libbuilder');
$rer = mysqli_query($db, "SELECT * FROM project where status='ongoing' ORDER BY created_at  DESC  LIMIT 7");



while($rr=mysqli_fetch_array($rer)){
    ?>
        <article class="proj-card">
            <img src="images/<?php echo $rr['profile_pic'];?>" alt="project image" class="proj-img">
            <p class="proj-text">
                <?php echo $rr['description']; ?>
            </p>
        </article>
 <?php }?>
  <?php
    $db = mysqli_connect('localhost', 'root', '', 'libbuilder');

$rer2 = mysqli_query($db, "SELECT * FROM project  ");



while($rr=mysqli_fetch_array($rer2)){
    ?>
        <article class="proj-card opp">
            <p class="proj-text">
                 <?php echo $rr['description'] ;?>
            </p>
            <img src="images/<?php echo $rr['profile_pic'];?>" alt="project image" class="proj-img">

        </article>
       <?php }?>
    </section>

    <!-- active  -->
    <section id="active"> 
        <h2>Active Projects</h2>
         <?php
    $db = mysqli_connect('localhost', 'root', '', 'libbuilder');
$rer3 = mysqli_query($db, "SELECT * FROM project where status='active' ORDER BY created_at  DESC  LIMIT 7");



while($rr=mysqli_fetch_array($rer3)){
    ?>
        <article class="proj-card">
            <img src="images/<?php echo $rr['profile_pic'] ;?>" alt="project image" class="proj-img">
            <p class="proj-text">
                <?php echo $rr['description'] ;?>
            </p>
        </article>
<?php }?>
        
    </section>

    <!-- complete  -->
    <section id="complete"> 
        <h2>Complete Projects</h2>
         <?php
    $db = mysqli_connect('localhost', 'root', '', 'libbuilder');
$rer4 = mysqli_query($db, "SELECT * FROM project where status='active' ORDER BY created_at  DESC  LIMIT 7");



while($rr=mysqli_fetch_array($rer4)){
    ?>
        <article class="proj-card">
            <img src="images/<?php echo $rr['profile_pic']; ?>" alt="project image" class="proj-img">
            <p class="proj-text">
                 <?php echo $rr['description'] ;?>
            </p>
        </article>
<?php } ?>
        
    </section>
    </main>

    <footer>
        <article class="vision">
            <h3>Vision</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci nihil explicabo pariatur placeat, 
                sit debitis dignissimos tempora culpa nam beatae quisquam, quos repellat harum.</p>
            <h3>Mission</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem expedita unde dicta saepe? 
                Quia culpa labore architecto, molestiae, sint odio.</p>
        </article>
        <article class="message" id="contact">
            <p>Send us a message</p>

     <form name="comment" class="form-horizontal" enctype="multipart/form-data" method="post" action="project.php" >
            <input type="text" name="email_address" placeholder="Enter your email.." required>
            <input type="text" name="first_name" placeholder="Enter your first name.." required>
            <input type="text" name="last_name" placeholder="Enter your last name..">
            <input type="number" name="phone_number" placeholder="Enter your phone number..">
             <input type="text" name="subject" placeholder="Enter your subject.." required>
            <textarea name="comment" id="message-content" cols="30" rows="5" placeholder="Type message.."></textarea>

            <button type="submit" name="save" class="send" style="margin-left: 30%;">Send</button>
        </form>
        </article>
        <article class="contact">
            <p>Contact us via:</p>
            <a href="https://wa.me/254714757251"><span>  <img src="icons/whatsapp-svgrepo-com.svg" alt="whatsapp" class="social-icon"> +254 758 005223  </span></a>
            <a href="https://julianlibratomulesi@gmail.com "><span>  <img src="icons/gmail-svgrepo-com.svg" alt="gmail" class="social-icon">Julian Libratoz  </span></a>
            <a href="https://0758005223"><span>  <img src="icons/phone-svgrepo-com.svg" alt="phone" class="social-icon">0758 005223  </span></a>
        </article>
    </footer>
<script src="nav.js"></script>

</body>
</html>