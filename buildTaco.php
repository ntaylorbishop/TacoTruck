<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/styles_build.css" rel="stylesheet" />
<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
<script src="js/jQuery.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/fillIngredients.js"></script>
<script src="js/liveIngredients.js"></script>
<title>Taco Truck -- Build a Taco</title>
</head>

<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="user.php">Home</a> &#x2022; <a href="locations.html">Locations</a> &#x2022; <a href="account.php">Account</a> &#x2022; <a href="index.php">Log Off</a>
    <div class="divider"></div>
  </div>
</div>
<h1 id="title">Build your Taco Order</h1>
<div id="content">
<div id="selection">
  <form id="currentTaco">
    <div id="ingredients">
      <div id="accordion"> </div>
    </div>
    <div id="preview">
<div id="qtyAdd">
Quantity:
        <select name="qty">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <input type="submit" value="Add to Order" />
</div>
    </div>
  </form>
</div>
  <div id="order">

    <form id="currentOrder" action="payment.php" method="post">
      <input type="submit" value="Proceed to Check Out" />
    </form>
  </div>
</div>
<div class="divider2"></div>
<div id="footer">
  <div style="text-align:center">Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</div>
</body>
</html>
