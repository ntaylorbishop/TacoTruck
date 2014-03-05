<!doctype html>
<html>
<head>
	<title>Taco Truck -- Home</title>
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
	<div id="lastOrder" style="text-align:center">
		<h2>Your last order was:</h2>
		<ul>
			<li>1 Beef Fajita Taco        3.75</li>
			<li>1 Brushfire Taco          4.15</li>
		</ul>
		<form name="repeat" action="payment.php" method="post">
			<input type="submit" id="repeat" value="Repeat Last Order"/>
		</form>
		<form name="build" action="buildTaco.php" method="post">
			<input type="submit" id="build" value="Build Your Own Taco"/>
		</form>
	</div>
<footer>
  <div style="text-align:center">Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>

</html>