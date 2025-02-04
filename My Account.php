<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
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

    <div id="data">
      <br>
      <?php
        error_reporting(0);
        include 'userconnection.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<p align='center'><font color='black' font-family='aller'>Data Available</font></p>";

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='user-data'>";
            echo "<h4>ID: " . $row["id"] . "</h4>";
            echo "<p>Name: " . $row["username"] . "</p>";
            echo "<p>Email: " . $row["email"] . "</p>";
            echo "<p>Mobile Number: " . $row["mobilenumber"] . "</p>";
            echo "<p>NIC: " . $row["nic"] . "</p>";
            echo "</div>";
          }
        } else {
          echo "<p align='center'><font color='white' font-family='aller'>No User Data</font></p>";
        }
      ?>
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