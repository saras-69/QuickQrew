<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
      });
    });
  </script>
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

    <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27288.248099616132!2d75.70063359999999!3d31.247564799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1731541613994!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div><!--map-->

    <div id="flip"> For more info </div>
    <div id="panel">Contact Us<br>
      <p>Saras - +91 xxxxxxxxxxx9</p>
     
    </div>

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
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="email" placeholder="Email">
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
          <input type="submit" name="bSubmit" value="Send">
        </form>
        <script type="text/javascript">
          function validate() {
            if (document.contactus.name.value == "") {
              alert("Please provide your name!");
              document.contactus.name.focus();
              return false;
            }
            if (document.contactus.email.value == "") {
              alert("Please provide your Email!");
              document.contactus.email.focus();
              return false;
            }
            if (document.contactus.subject.value == "") {
              alert("Please provide a subject!");
              document.contactus.subject.focus();
              return false;
            }
            return (true);
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
    </div><!--copyright-->
  </div> <!--wrapper-->
</body>
</html>