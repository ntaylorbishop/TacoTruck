<?php
<!doctype html>
<!--This page allows users to create an account with Taco Truck.-->
<html>
<head>
	<title>Taco Truck -- Create Account</title>
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>	
	<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
    <div id="links"> <a href="#homepage">Home</a> 
    <div id="divider"></div>
  	</div>
  	<h1 style="text-align:center">Create a Taco Truck Account</h1>
	<form name="payment" action="user.html" method="post">
	  <div>First Name:
	    <input type="text" id="fName" name="fName"/>
	  </div>
	  <div>Last Name:
	    <input type="text" id="lName" name="lName"/>
	  </div>
	  <div>Email:
	    <input type="email" id="email" name="email"/>
	  </div>
	  <div>Password:
	    <input type="password" id="pwd" name="pwd"/>
	  </div>
	  <div>Confirm Password:
	    <input type="password" id="pwdC" name="pwdC"/>
	  </div>
	  <div>Card Provider:
	    <select id="ccType" name="ccType">
	      <option value="AE">American Express</option>
	      <option value="MC">MasterCard</option>
	      <option value="V">Visa</option>
	    </select>
	  </div>
	  <div>Card Number:
	    <input type="text" id="ccNum" name="ccNum"/>
	  </div>
	  <input type="submit" id="register" name="register" value="Sign Up"/>
	</form>
</body>
</html>
?>