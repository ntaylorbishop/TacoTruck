<?php
 setcookie("loggedIn", "true", time()+3600);
?>

<!DOCTYPE HTML>
<!--This is our login page.  It provides users with options to log in (if they have an account), sign up for an account, or order as a guest ok-->
<html>
<head>
<title>Welcome to Taco Truck</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet">
<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
<link href="css/styles_index.css" rel="stylesheet" />
<script src="js/jQuery.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/homePage.js"></script>
</head>
<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="locations.html">Locations</a></div> 
  <div class="divider"></div>
</div>
<h1 id="title">Taco Truck</h1>
<div id="content">
  <div id="loginPane"> <br/>
    <br/>
    <br/>
    <br/>
    <form name="login" action="user.php" method="post" onSubmit="return checkLogin(this)">
      <div>
        <label>Email:</label>
        <input type="text" id="email" name="email"/>
      </div>
      <div>
        <label>Password:</label>
        <input type="password" id="pwd" name="pwd" required/>
      </div>
      <input type="submit" id="LogIn" name="LogIn" value="Log In"/>
    </form>
    
    <form name="signup" action="account.php" method="post">
      <input type="submit" id="register" name="register" value="Sign Up"/>
    </form>
    <form name="guestorder" action="buildTaco.php" method="post">
      <input type="submit" id="guest" name="guest" value="Order as a Guest"/>
    </form>
  </div>
  <div id="infoPane">
    <p>Welcome to TacoTruck.com, where you can order delicious tacos online!</p>
    <p>We are a family-owned restaurant that prepares the most delicious tacos in the Dallas/Fort Worth Metroplex.</p>
    <p>We offer a variety of choices and an online ordering system to make it easier for you to get tacos whenever you want, at any of our locations!</p>
  </div>
</div>
<div class="divider2"></div>
<div id="footer">
  <div style="text-align:center">Taco Truck &#x2022; <a href="#locations">123 Taco Avenue - Dallas - TX - 75205 </a>&#x2022; 214-MY-TACOS (214-698-2267) &#x2022; <a href="#homepage">tacotruck.com </a>&#x2022; Hours: 24/7</div>
</div>
</body>
</html>
