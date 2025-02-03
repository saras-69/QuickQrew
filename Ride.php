<!DOCTYPE html>
<html>

<head>
  <title>Plan Your Ride</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <style>
    
    div.full {
      background-image: url(img/lack-of-competence-7388271_1920.jpg);
      background-size: cover;
      padding: 50px;
      color: white;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
      width: 100%;
      max-width: 5000px;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"],
    input[type="reset"] {
      width: 100%;
      max-width: 500px;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 25px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #45a049;
    }

    .book {
      color: white;
      font-family: aller;
      font-size: 40px;
      margin-top: 20px;
      text-align: center;
    }

    label {
      color: white;
    }

    .form-container {
      max-width: 600px;
      margin: auto;
      background: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
    }
    
    .logo h1 {
      color: black;
    }
    
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

    <div class="full">
      <h1 class="book"><b>Book your Crew</b></h1>
      <div class="form-container">
      <form name="rideform" onsubmit="return validatePlanRideForm()" method="post" action="Ride/configride.php">
  <label for="name">Name</label>
  <input type="text" name="name" placeholder="Enter Your Name" required>

  <label for="email">Email</label>
  <input type="email" name="email" placeholder="Enter Your Email" required>

  <label for="message">Message</label>
  <textarea name="message" placeholder="Enter Your Message" rows="4" required></textarea>

  <label for="pickuplocation">Location</label>
  <input type="text" name="pickuplocation" placeholder="Enter Your Pickup Location" required>

  <label for="pickuptime">Time</label>
  <input type="time" name="pickuptime" placeholder="Enter Your Pickup Time" required>

  <label for="pickupdate">Date</label>
  <input type="date" name="pickupdate" placeholder="Enter Your Pickup Date" required>

  <label for="vehicletype">Crews type</label>
  <select id="vehicletype" name="vehicletype" required>
    <option value=""></option>
    <option value="Cook">Cook</option>
    <option value="Electrician">Electrician</option>
    <option value="Labour">Labour</option>
    <option value="Maid">Maid</option>
    <option value="Plumber">Plumber</option>
    <option value="Carpenter">Carpenter</option>
    <option value="Driver">Driver</option>
    <option value="Caretaker">Caretaker</option>
  </select>

  <input type="reset" value="Reset All">
  <input type="submit" name="book" value="Schedule Your Crew">
</form>
      </div>
    </div><!--full-->

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
  </div><!--wrapper-->
</body>

</html>