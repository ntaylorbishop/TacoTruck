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
<title>Taco Truck -- Build a Taco</title>
</head>

<body>
<div id="topBar"> <img src="img/taco_truck_logo.png" id="logo">
  <div id="links"> <a href="/user.php">Home</a> &#x2022; <a href="/account.php">Account</a> &#x2022; <a href="/index.php">Log Off</a>
    <div class="divider"></div>
  </div>
</div>
<h1>Build your Taco Order</h1>
<div id="content">
<div id="ingredients">
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
        <input type="radio" name="tortilla" value="flour" />
        Flour<br />
        <input type="radio" name="tortilla" value="cayenne" />
        Cayenne<br />
        <input type="radio" name="tortilla" value="wheat" />
        Wheat<br />
        <input type="radio" name="tortilla" value="spinach" />
        Spinach<br />
      </div>
      <h3>Rice</h3>
      <div>
        <input type="radio" name="rice" value="cilantro" />
        Cilantro Rice<br />
        <input type="radio" name="rice" value="spanish" />
        Spanish Rice<br />
      </div>
      <h3>Cheese</h3>
      <div>
        <input type="radio" name="cheese" value="quesoFresco" />
        Queso Fresco<br />
        <input type="radio" name="cheese" value="cheddar/jack" />
        Cheddar/Jack Mix<br />
        <input type="radio" name="cheese" value="monterreyJack" />
        Monterrey Jack<br />
      <div/>
      <h3>Beans</h3>
      <div>
        <input type="radio" name="beans" value="refried" />
        Refried Beans<br />
        <input type="radio" name="beans" value="pinto" />
        Whole Pinto Beans<br />
        <input type="radio" name="beans" value="black" />
        Black Beans<br />
      <div/>
      <h3>Sauce</h3>
      <div>
      <h3>Vegetables</h3>
      <div>
        <input type="checkbox" name="vegetables" value="lettuce"/>
        Lettuce<br />
        <input type="checkbox" name="vegetables" value="tomatoes"/>
        Tomatoes<br />
        <input type="checkbox" name="vegetables" value="peppers"/>
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
  </div>
  <div id="preview">
  </div>
  <div id="order">
  <form id="currentOrder" action="payment.php" method="post">
    <input type="submit" value="Proceed to Check Out" />
  </form>
  </div>
</div>
<footer>
  <div style="text-align:center">Taco Truck |<a href="#locations">123 Taco Avenue - Dallas - TX - 75205</a>| 214-MY-TACOS (214-698-2267) |<a href="#homepage">tacotruck.com</a>| Hours: 24/7</div>
</footer>
</body>
</html>
