<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/styles.css" rel="stylesheet" />
<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" />
<script src="js/jQuery.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/main.js"></script>
<title>Taco Truck -- Build a Taco</title>
</head>

<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo" alt="">
  <div id="links"> <a href="#homepage">Home</a> | <a href="#account">Account</a> | <a href="#cart">Cart</a> | <a href="#logoff">Log Off</a>
    <div id="divider"></div>
  </div>
</div>
<form id="currentTaco">
  <div id="accordion">
    <h3>Filling</h3>
    <div>
      <input type="radio" name="filling" value="steak" />
      Steak<br />
      <input type="radio" name="filling" value="chicken" />
      Chicken<br />
      <input type="radio" name="filling" value="carnitas" />
      Carnitas<br />
      <input type="radio" name="filling" value="veggies" />
      Veggies<br />
    </div>
    <h3>Tortilla</h3>
    <div>
      <input type="radio" name="tortilla" value="corn" />
      Corn<br />
      <input type="radio" name="tortilla" value="flour" />
      Flour<br />
    </div>
    <h3>Extras</h3>
    <div>
      <input type="checkbox" name="extras" value="guac" />
      Guac<br />
      <input type="checkbox" name="extras" value="sourCream" />
      Sour Cream<br />
      <input type="checkbox" name="extras" value="queso" />
      Queso<br />
    </div>
  </div>
  <input type="number" name="quantity" min="1" />
  Quantity:
  <input type="range" name="Quantity" min="1" max="5" />
  <input type="submit" value="Add to Order" />
</form>
<form id="currentOrder" action="payment.php" method="post">
  <input type="submit" value="Proceed to Check Out" />
</form>
<footer>
  <div style="text-align:center">Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>
</html>
