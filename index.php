<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pizza Planet</title>
/*inserted captcha session - Anita Yummit
<?php session_start() ?> 
<?php 
if($_SESSION["captcha"]==$_POST["captcha"])
{
    //CAPTHCA is valid; proceed the message: save to database, send by e-mail ...
}
?>
<link href="css/pizza.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/script.js"></script>
</head>
<?php require('function.php'); ?>
<body class="twoColFixLtHdr">
<div id="header" ><img src="pizzaPlanetLogo.jpg" width="653" height="364" /></div>
<div id="mainContent">

<div id="container">
<br />
<br />
<form action="pizzaResults.php" name="pizzaForm" method="post" onSubmit="return validateForm()">
<label for="firstName"><span>First Name:*</span></label>
  <input name="firstName" type="text" maxlength="12" id="firstName" /><?php emptyCheck($_REQUEST['firstName']); ?><br  />
  
  
  <label for="lastName"><span>Last name:*</span></label>
<input type="text" name="lastName" maxlength="15" id="lastName" /><br />
<label for="address"><span> Address:*</span></label>
<input type="text" name="address" maxlength="30" id="address" /><br />
<label for="city"><span>City:*</span></label>
<input type="text" name="city" maxlength="15" id="city"/><br />
<label for="State"><span>State:*</span></label>
<select name="State" size="1">
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
</select><br />
<label for="zip"><span>Zip Code:*</span></label>
<input type="text" name="zip"/><br />
<label for="email"><span>E-Mail:*</span></label>
<input type="text" name="email"/><br />
<div>
<fieldset>
<legend>Method of Payment</legend>
<label for="cash">
<input type="radio" name="Payment" value="Cash" id="cash" />
Cash</label><br />
<label for="Check">
<input type="radio" name="Payment" value="Check" id="Check" />
Check</label><br />
<label for="creditCard">
<input type="radio" name="Payment" value="CreditCard" id="creditCard" />
Credit Card</label><br />
</fieldset>
<div>
<fieldset>
<legend>Toppings .25 each</legend>
<p>
<label for="pepperoni">
<input type="checkbox" name="Toppings[]" value="pepperoni" id="pepperoni" />
Pepperoni</label>
<br />
<label for="sausage">
<input type="checkbox" name="Toppings[]" value="sausage" id="sausage" />
Sausage</label>
<br />
<label for="bacon">
<input type="checkbox" name="Toppings[]" value="bacon" id="bacon"/>
Bacon</label>
<br />
<label for="geenOnions">
<input type="checkbox" name="Toppings[]" value="green onions" id="greenOnions"/>
Green Onions</label>
<br />
<label for="olives">
<input type="checkbox" name="Toppings[]" value="olives" id="olives"/>
Olives</label>
<br />
<label for="onions">
<input type="checkbox" name="Toppings[]" value="onions" id="onions"/>
Onions</label>
<br />
<label for="tomato">
<input type="checkbox" name="Toppings[]" value="tomato" id="tomato"/>
Tomato</label>
<br />
<label for="mushroom">
<input type="checkbox" name="Toppings[]" value="mushroom" id="mushroom" />
Mushroom</label>
<br />
<label for="pineapple">
<input type="checkbox" name="Toppings[]" value="pineapple" id="pineapple"/>
Pineapple</label>
<br />
</p>
</fieldset>
</div>
<div>
<fieldset>
<legend> Size</legend>
<label for="small">
<input type="radio" name="pizzaSize" value="small" id="pizzaSize_0" />
Small $8.00</label>
<br />
<label for="medium">
<input type="radio" name="pizzaSize" value="medium" id="pizzaSize_1" />
Medium $10.00</label>
<br />
<label for="large">
<input type="radio" name="pizzaSize" value="large" id="pizzaSize_2" />
Large $12.00</label>
<br />
<label for="jumbo">
<input type="radio" name="pizzaSize" value="jumbo" id="pizzaSize_3" />
Jumbo $15.00</label>
<br />
</p>
</fieldset>
<div>
<fieldset>
<legend>Sides $2.00 ea.</legend>
<p>
<label for="dessertPizza">
<input type="checkbox" name="sides[]" value="Dessert Pizza" id="dessertPizza" />
Dessert Pizza </label>
<br />
<label for="nachos">
<input type="checkbox" name="sides[]" value="Nachos" id="nachos"/>
Nachos </label>
<br />
<label for="twoLiter">
<input type="checkbox" name="sides[]" value="Pepsi 2 Liter" id="twoLiter" />
Pepsi 2 Liter </label>
<br />
<label for="cokeLiter">
<input type="checkbox" name="sides[]" value="Coke 2 Liter" id="cokeLiter"/>
Coke 2 Liter </label>
<br />
<label for="Alfredo">
<input type="checkbox" name="sides[]" value="Fettucini Alfredo" id="alfredo"/>
Fettucini Alfredo </label>
<br />
</p>
</fieldset>
</div>




?php session_start()?>
<form method="post" action="">
<table bgcolor="#CCCCCC">
<tr><th>Contact us (Post new message):</th></tr>
<tr><td><textarea cols="30" rows="5" name="message"></textarea></td></tr>
<tr><td align="center">CAPTCHA:<br>
    (antispam code, 3 black symbols)<br>
    <table><tr><td><img src="captcha.php" alt="captcha image"></td>
    <td><input type="text" name="captcha" size="3" maxlength="3"></td></tr></table>
</td></tr>
<tr><th align="center"><input type="submit" value="Submit"></th></tr>    
</table>
</form>
<?php 
if(isset($_POST["captcha"]))
if($_SESSION["captcha"]==$_POST["captcha"])
{
    //CAPTHCA is valid; proceed the message: save to database, send by e-mail ...
    echo 'CAPTCHA is valid; proceed the message';
}
else
{
    echo 'CAPTCHA is not valid; ignore submission';
}
?>

</form>
</div>
</div>

</body>
</html>