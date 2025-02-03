<?php
   $result="";
    if(isset($_POST['bSubmit'])){
        require 'PHPMailerAutoload.php';
        $mail = new PHPMailer;
                                   
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Port = 587; 
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';                               
    $mail->UserName = 'qwickcrew@example.com';                 
    $mail->Password = 'qwickcrew123';                           
                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('kasunthilina1000@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);                                 
    $mail->Subject = 'Form Submission: '.$_POST['subject'];
    $mail->Body    = '<h1 align=center>Name : '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

    if(!$mail->send()){
        $result="Something went wrong";
    } else {
        $result = "Thanks ".$_POST['name']." for contacting us.";
    }
   } 
?>

<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
		

  
</style>

</head>
<body>
    <div class="wrapper">
	<header class="clearfix">
            <div class="logo">
                <h1>QwickCrew</h1>
                <span class="hamburger" onclick="toggleMenu()">&#9776;</span>
                <nav>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="Crews.php">Crews</a></li>
                        <li><a href="Ride.php">Hire</a></li>
                        <li><a href="My Account.php">My Account</a></li>
                        <li><a href="Contact Us.php">Contact Us</a></li>
                        <li><a href="registration/register.php">User Sign Up</a></li>
                        <li><a href="registration/registerdriver.php">Crew Sign Up</a></li>
                        
                    </ul>
                </nav>
            </div> <!--logo-->
        </header>
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/Slide1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/worker-5972518_1280.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/slide3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/drechsler-3394311_1280.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/plumber-228010_1280.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/workman-with-ax-white-background_1368-5701.avif" style="width:100%">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        

        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>

        <div class="intro clearfix">
            <div class="introimage">
                <img src="img/man-6767164_1280.png" alt="Driver">
            </div> <!--introimage-->
            <div class="introtext">
            <h1>QwickCrew - Your Trusted Manpower Solution</h1>
            <p>At QwickCrew, we understand the importance of having the right people in the right place at the right time. We provide you with the best manpower solutions to meet your needs. Our services are designed to help you save time and energy, so you can focus on what matters most to you.</p>
<p>
    <i class="fas fa-check-circle"></i> Save your precious time and energy<br><br>
    <i class="fas fa-check-circle"></i> Enjoy the convenience of our professional services<br><br>
    <i class="fas fa-check-circle"></i> Utilize your time efficiently with our skilled manpower<br><br>
    <i class="fas fa-check-circle"></i> We guarantee quality and reliability<br><br>
    <i class="fas fa-check-circle"></i> QwickCrew - Providing labor, electrician, plumber, carpenter, maid, cook, and more.
</p>
                <a href="About Us.php">Read more &raquo;</a><br><br><br>
                <div>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 100px;"><span><a href="registration/register.php">Sign Up as a User</a></span></button>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 30px;"><span><a href="registration/registerdriver.php">Sign Up as a Crew</a></span></button>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; margin-left: 30px;"><span><a href="adminpanel.php">Admin</a></span></button>
</div>
            </div> <!--introtext-->
        </div><!-- intro-->

        <div class="topic">
            <h3>Meet our Crews Services</h3>
        </div><!--topic-->

        <div class="banner1">
            <table style="font-family: aller">
                <tr>
                    <th>
                    <img src="img/aby-zachariah-wyLKrEBGtKY-unsplash.jpg" style="border-radius: 40px; width: 400px; height: 250px;">
                    </th>
                    <td align="left">
                    <h3>Labor Services</h3>
                    Never waste your time searching for reliable labor. Use your time efficiently with our skilled manpower. We provide you with the best labor services to meet your needs and budget. Come and register with us now. Let’s step on to a better future.<br>
                    <a href="Ride.php">Coming Soon &raquo;</a>
                    </td>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner2">
            <table style="font-family: aller">
                <tr>
                    <td align="left">
                        <h3>Driver Only</h3>
                        Have a vehicle? Tired of driving? Is it time wasting? Need a better solution? Hire a skillful driver from us. Come and register with us now. Let’s step on to a better future.<br>
                        <a href="Crews.php">More info &raquo;</a>
                    </td>
                    <th>
                        <img src="img/Driveronly.png" style="border-radius: 40px">
                    </th>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner1">
            <table style="font-family: aller">
                <tr>
                    <th>
                        <img src="img/chef-5993951_1920.jpg" style="border-radius: 40px; width: 400px; height: 250px;">
                    </th>
                    <td align="left">
                    <h3>Cook Services</h3>
                    Never waste your time searching for a reliable cook. Enjoy delicious and healthy meals prepared by our professional cooks. We provide you with the best cook services to meet your needs and budget. Come and register with us now. Let’s step on to a better future.<br>
                        <a href="Crews.php">More info &raquo;</a>
                    </td>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner2">
            <table style="font-family: aller">
                <tr>
                    <td align="left">
                    <h3>Electrician Services</h3>
                    Never waste your time searching for a reliable electrician. We provide you with the best electrician services to meet your needs and budget. Our professional electricians ensure safety and quality in every job. Come and register with us now. Let’s step on to a better future.<br>
                    <a href="Crews.php">More info &raquo;</a>
                    </td>
                    <th>
                        <img src="img/electrician-8659084_1920.jpg" style="border-radius: 40px; width: 400px; height: 250px;">
                    </th>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner1">
            <table style="font-family: aller">
                <tr>
                    <th>
                        <img src="img/drechsler-3394311_1280.jpg" style="border-radius: 40px;  width: 400px; height: 250px;">
                    </th>
                    <td align="left">
                    <h3>Carpenter Services</h3>
                    Never waste your time searching for a reliable carpenter. We provide you with the best carpenter services to meet your needs and budget. Our professional carpenters ensure quality and precision in every job. Come and register with us now. Let’s step on to a better future.<br>
                    <a href="Crews.php">More info &raquo;</a>
                    </td>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner2">
            <table style="font-family: aller">
                <tr>
                    <td align="left">
                    <h3>Maids</h3>
                    Looking for a reliable maid to help with your household chores? Don’t waste your time searching for them. Come to us. Come and register with us now. Let’s step into a cleaner and more organized home.<br>
                        <a href="Crews.php">More info &raquo;</a>
                    </td>
                    <th>
                        <img src="img/avinash-kumar-4Ay3M-jfKZA-unsplash.jpg" style="border-radius: 40px;  width: 400px; height: 250px;">
                    </th>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner1">
            <table style="font-family: aller">
                <tr>
                    <th>
                        <img src="img/plumber-228010_1280.jpg" style="border-radius: 40px;  width: 400px; height: 250px;">
                    </th>
                    <td align="left">
                    <h3>Plumbers</h3>
                    Looking for a skilled plumber to fix your plumbing issues? Even if you found one, do they demand more than your budget? You are in the right place. Come and register with us now. Let’s step into a hassle-free plumbing experience.<br>

                        <a href="Crews.php">More info &raquo;</a>
                    </td>
                </tr>
            </table>
        </div><!--banner-->

        <div class="banner2">
            <table style="font-family: aller">
                <tr>
                    <td align="left">
                    <h3>Care Takers</h3>
                    Looking for a compassionate and reliable caretaker for your loved ones? You are in the right place. Come and register with us now. Let’s step into a more caring and supportive environment.<br>

                       <a href="Crews.php">More info &raquo;</a>
                    </td>
                    <th>
                        <img src="img/hospice-1788467_1920.jpg" style="border-radius: 40px;  width: 400px; height: 250px;">
                    </th>
                </tr>
            </table>
        </div><!--banner-->

        <center>
        <div class="homecontent clearfix">
            <div class="home-col">
                <h2>A Little About Us</h2>
                <img src="img/Us.png" alt="about us">
                <p>We are proud to say that our obligation is to provide you with a safe and time-saving ride with our drivers. Our service has been recognized in Sri Lanka for more than 10 years. We have been nominated as Sri Lanka's best service provider in 2018.</p>
                <p> And also, consecutively we won the award for the best upcoming growing company in Sri Lanka, from 2015 to 2018. Starting from 2000, we are providing best-practiced drivers to make sure your journey will be a safe one as well as a relaxed one. From a technology perspective, our services are on time for any place. </p>
                <a href="About Us.php">Read more about us &raquo;</a>
            </div><!--home-col-->

            <div class="home-col">
                <h2>Offers</h2>
                <div class="services">
                    <img src="img/Offer1.png" alt="Offers">
                    <h3>Special</h3>
                    <p>A brief description of the special offer we provide</p>
                </div><!--services-->

                <div class="services">
                    <img src="img/Offer2.png" alt="Offers">
                    <h3>Service</h3>
                    <p>A brief description of our services</p>
                </div><!--services-->

                <div class="services">
                    <img src="img/Offer3.png" alt="Offers">
                    <h3>Payment</h3>
                    <p>A brief description of the payment methods we accept</p>
                </div><!--services-->

                <div class="services">
                    <img src="img/Offer4.png" alt="Offers">
                    <h3>Volunteers</h3>
                    <p>A brief description of drivers who can register with us</p>
                </div><!--services-->
                <a href="#">View all our offers &raquo;</a>
            </div><!--home-col-->

            <div class="home-col">
                <h2>How to Use Our System</h2>
                <p>
                    1. QUICKER<br>
                    2. SPEED<br>
                    3. SECURITY<br>
                    4. DISCIPLINE<br>
                    5. SAFETY<br>
                </p>
                <p>Be a member of us. Use the Driver Hiring System on the Android Play Store to book our driver today itself, use promo codes for more discounts. For further details, visit our website <a href="About Us.php">www.qwickcrew.com</a></p>
            </div><!--home-col-->
        </div><!--homecontent-->
        </center>

        <footer>
            <div class="footercol">
                <h4>Latest news</h4>
                <div class="news">
                    <p>
                        <a href="#">News 1</a>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div><!--footercol-->

            <div class="footercol">
                <h4>Quick links</h4>
                <ul class="quicklinks">
                    <li><a href="Terms.php">T & C</a></li>
                    <li><a href="Careers.php">Careers</a></li>
                    <li><a href="Privacy.php">Privacy Policy</a></li>
                </ul><!--quicklinks-->
            </div><!--footercol-->

            <div class="footercol">
                <h4>Latest blog posts</h4>
                <div class="blogpost">
                    <h5>Post Title</h5>
                    <div class="postinfo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>
                    </div><!--postinfo-->
                </div><!--blogpost-->
            </div><!--footercol-->

            <div class="footercol">
                <h4>Contact us</h4>
                <form action="Home.php" class="contact" name="contactus" onsubmit="return(validate());">
                    <h5><?= $result; ?></h5>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" name="bSubmit" value="Send">
                </form>

                <script type="text/javascript">
                    function validate() {
                        if(document.contactus.name.value=="") {
                            alert("Please provide your name!");
                            document.contactus.name.focus();
                            return false;
                        }
                        if(document.contactus.email.value=="") {
                            alert("Please provide your Email!");
                            document.contactus.email.focus();
                            return false;
                        }
                        if(document.contactus.subject.value=="") {
                            alert("Please provide a subject!");
                            document.contactus.subject.focus();
                            return false;
                        }
                        return(true);
                    }
                </script>
            </div><!--footercol-->
        </footer>

        <div class="copyrights">
            <div class="left">
                Copyrights &copy; Domain Name. All Rights Reserved
            </div>
            <div class="right">
			Website by: QwickCrew.com
            </div>
        </div><!--copyrights-->
    </div> <!--wrapper-->
</body>
</html>
           