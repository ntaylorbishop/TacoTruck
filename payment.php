<!DOCTYPE HTML>
<!--This is the payment page that allows the user to finalize ordering information
	for their tacos.-->
<html>
<head>
	<title>Taco Truck -- Payment</title>
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
<div id="links"> <a href="#homepage">Home</a> | <a href="#account">Account</a> | <a href="#logoff">Log Off</a>
    <div id="divider"></div>
 </div>
 <div>
 <h1>Taco Payment</h1>
  	<form name="payment" action="user.html" method="post">
  		<h2>Payment Information</h2>
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
	  <!--<input type="submit" id="register" name="register" value="Sign Up"/>-->
	</form>
</div>
</div>

<div>
	<h2>Your Order</h2>
	<table>
		<tr>
			<th>Quantity</th>
			<th>Taco</th>
			<th>Price</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Beef Fajita</td>
			<td>3.75</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Brushfire</td>
			<td>4.15</td>
		</tr>
	</table>
	<h3>Order Total:  </h3>
	<form name="checkout" action="confirmation.php" method="post">
		<input type="submit" id="checkout" name="checkout" value="Check Out"/>
	</form>
</div>

<footer>
  <div>Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>


</html>
