<!DOCTYPE HTML>
<!--This page allows users to create an account with Taco Truck.-->
<html>
<head>
<title>Taco Truck -- Create Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet">
<link href="css/styles_account.css" rel="stylesheet">
<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
<script src="js/jQuery.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/main.js"></script>
</head>
<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="/user.php">Home</a> &#x2022; <a href="locations.html">Locations</a> &#x2022; <a href="/account.php">Account</a> &#x2022; <a href="/index.php">Log Off</a>
    <div class="divider"></div>
  </div>
</div>
<h1 id="title">My Account</h1>
<div id="content">
  <form name="payment" action="user.php" method="post" onsubmit="return checkRegister(this)">
    <div>s
      <label>First Name:</label>
      <input type="text" id="fName" name="fName" required/>
    </div>
    <div>
      <label>Last Name:</label>
      <input type="text" id="lName" name="lName" required/>
    </div>
    <div>
      <label>Phone:</label>
      <input type="text" id="phone" name="phone" required/>
    </div>
    <div>
      <label>Email:</label>
      <input type="email" id="email" name="email" required/>
    </div>
    <div>
      <label>Password:</label>
      <input type="password" id="pwd" name="pwd" required/>
    </div>
    <div>
      <label>Confirm Password:</label>
      <input type="password" id="pwdC" name="pwdC" required/>
    </div>
    <div>
      <label>Card Provider:</label>
      <select id="ccType" name="ccType">
        <option value="AE">American Express</option>
        <option value="MC">MasterCard</option>
        <option value="V">Visa</option>
      </select>
    </div>
    <div>
      <label>Card Number:</label>
      <input type="text" id="ccNum" name="ccNum" required/>
    </div>
    <input type="submit" id="register" name="register" value="Sign Up"/>
  </form>
</div>
<div class="divider2"></div>
<div id="footer">
  <div>Taco Truck &#x2022; <a href="#locations">123 Taco Avenue - Dallas - TX - 75205 </a>&#x2022; 214-MY-TACOS (214-698-2267) &#x2022; <a href="#homepage">tacotruck.com </a>&#x2022; Hours: 24/7</div>
</div>
</body>
</html>
