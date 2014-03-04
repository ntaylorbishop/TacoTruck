<!doctype html>
<!--This is our login page.  It provides users with options to log in (if they have an account), sign up for an account, or order as a guest ok-->
<html>
<head>
	<title>Welcome to Taco Truck</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
  <script src="js/jQuery.js"></script>
  <script src="js/jquery-ui-1.10.4.custom.js"></script>
  <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="js/main.js"></script>
</head>
<body>
  <div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
    <div id="links"> <a href="#homepage">Home</a> | <a href="#account">Account</a> | <a href="#cart">Cart</a> | <a href="#logoff">Log Off</a>
    <div id="divider"></div>
    </div>
  <h1 style="text-align:center">Taco Truck</h1>
<form name="login" action="user.html" method="post">
  <div>Username:
    <input type="text" id="userN" name="userN"/>
  </div>
  <div>Password:
    <input type="password" id="pwd" name="pwd"/>
  </div>
  <input type="submit" id="LogIn" name="LogIn" value="Log In"/>
</form>
<form name="signup" action="account.html" method="post">
  <input type="submit" id="register" name="register" value="Sign Up"/>
</form>
  <input type="button" id="guest" name="guest" value="Order as a Guest"/>

	<p>Welcome to TacoTruck.com, where you can order delicious tacos online!</p>
	<p>We are a family-owned restaurant that prepares the most delicious tacos in the Dallas/Fort Worth Metroplex.</p>
	<p>We offer a variety of choices and an online ordering system to make it easier for you to get tacos whenever you want, at any of our locations!</p>

<footer>
  <div style="text-align:center">Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>

</html>
