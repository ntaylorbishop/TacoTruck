<!DOCTYPE HTML>
<html>
<head>
<title>Taco Truck -- Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet">
<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
<link href="css/styles_user.css" rel="stylesheet">
<script src="js/jQuery.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/recentOrder.js"></script>
</head>

<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="user.php">Home</a> &#x2022; <a href="locations.html">Locations</a> &#x2022; <a href="account.php">Account</a> &#x2022; <a href="index.php">Log Off</a></div>
  <div class="divider"></div>
</div>
</div>
<h1 id="title">Taco Truck</h1>
<div id="content">
  <div id="lastOrder">
    <h2>Your last order was:</h2>
    <table id="recentOrder">
      <tr>
        <th>Date</th>
        <th>Price</th>
      </tr>
    </table>
    <table id="recentOrderDetails">
      <tr>
        <th>Quantity</th>
        <th></th>
	<th>Details</th>
      </tr>
    </table>
  </div>
  <form name="repeat" action="payment.php" method="post">
    <input type="submit" id="repeat" value="Repeat Last Order"/>
  </form>
  <form name="build" action="buildTaco.php" method="post">
    <input type="submit" id="build" value="Build Your Own Taco"/>
  </form>
</div>
<div class="divider2"></div>
<div id="footer">
  <div>Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</div>
</body>
</html>
