<!DOCTYPE HTML>
<html>
<head>
	<title>Taco Truck -- Order Confirmation</title>
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
    <div id="links"> <a href="/user.php">Home</a> | <a href="/account.php">Account</a> | <a href="/index.php">Log Off</a>
    <div id="divider"></div>
  	</div>

  	<h1>Order Confirmation</h1>
  	<div id="confirm">
  		<h2>Your order is confirmed!</h2>
  		<p>Your order will be ready to pick up in 5-10 minutes.  Please pick it up at your chosen Taco Truck location.</p>
  	</div>
  	<div id="order">
  		<h2>Your Order:</h2>
  		<!--Then a text box where we will include an order, in list form-->
  		<h3>Order total: </h3>
  		<form name="return" action="user.php" method="post">
  			<input type="submit" id="return" name="return" value="Home"/>
  		</form>
  	</div>
  	<div id="thanks">
  		<h1>Thank you!  Come back soon!</h1>
  	</div>
<footer>
  <div>Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>
</html>