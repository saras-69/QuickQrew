<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <style>
    input[type="text"] {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid gray;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      font-weight: bold;
      font-size: 15px;
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      background-color: #7EE958;
      border-radius: 25px;
    }

    input[type="submit"] {
      font-size: 15px;
      font-weight: bold;
      background-color: green;
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      border-radius: 25px;
    }

    .check {
      padding-left: 10%;
      color: Blue;
      font-family: sans-serif;
    }

    #myDIV {
      width: 100%;
      padding: 50px 0;
      text-align: center;
      background-color: none;
      margin-top: 20px;
      display: none;
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

    <h1 class="check">Checkout</h1>

    <br/><br/><br/><br/>

    <center>
      <input type="submit" value="Handout To Driver" onclick=""><br/><br/>
      <button onclick="gethidefunction()">Pay Online</button>
    </center>

    <div id="myDIV">
      <label style="text-align:left" for="cardnumber">Card Number</label>&nbsp&nbsp
      <input type="text" name="cardnumber" placeholder="****/****/****/****">
      <br/><br/><br/>
      <label style="text-align:center" for="expiredate">Valid Thru</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" id="date" placeholder="MM / YY"/><br/><br/><br/>
      <label style="text-align:right" for="pin">CVV / CVC </label>&nbsp&nbsp&nbsp&nbsp
      <input type="text" id="pin" placeholder="Enter Code"/>
      <input type="submit" value="Checkout" onclick="">
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

  <script>
    function gethidefunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</body>
</html>