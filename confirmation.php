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
<script src="js/jquery.cookie.js"></script>
<script src="js/main.js"></script>
</head>

<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="user.php">Home</a> &#x2022; <a href="locations.html">Locations</a> &#x2022; <a href="account.php">Account</a> &#x2022; <a href="index.php">Log Off</a>
    <div class="divider"></div>
  </div>
</div>
<h1 id="title">Order Confirmation</h1>
<div id="content">
<div id="confirm">
  <h2>Your order is confirmed!</h2>
  <p>Your order will be ready to pick up in 5-10 minutes.</p>
</div>
<div id="order">
  <h3>Order total: <?php echo $_COOKIE['total']; ?></h3>
  <form name="return" action="user.php" method="post">
    <input type="submit" id="return" name="return" value="Home"/>
    <?php $_POST['email'] = $_COOKIE["user"]; ?>
  </form>
</div>
<div id="thanks">
  <h1>Thank you!  Come back soon!</h1>
</div>
</div>
<div class="divider2"></div>
<div id="footer">
  <div>Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</div>
</body>
</html>
