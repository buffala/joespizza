<?php
$email=$_REQUEST['email'];
$toppings=$_REQUEST['toppings'];
$name=$_REQUEST['firstName']+$_REQUEST['lastName'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['State'];
$zip=$_REQUEST['zip'];
$size=$_REQUEST['pizzaSize'];
$sides=$_REQUEST['sides'];



/*
 * echo out the user input back to the user
 */
?>
Congratulations <?php echo $_REQUEST['firstName'];?> <?php echo $_REQUEST['lastName'];?><br />
We will deliver your order to: <?php echo $address ?>
<?php echo $_REQUEST["city"];?><br />
<?php echo $_REQUEST["State"];?><br  />
<?php echo $_REQUEST['zip'];?><br />
You placed an order for a <?php echo $_REQUEST['pizzaSize'];?> pizza.<br />
Your method of payment is <?php echo $_REQUEST['Payment'];?>.<br  />


<?php
  $toppings = $_REQUEST['Toppings'];
  if(empty($toppings)) 
  {
    echo("You didn't select any toppings.");
  } 
  else 
  {
    $N = count($toppings);

    echo("You selected $N topping(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($toppings[$i] . " ");
    }
  }
?>
<br  />
<?php

  $sides = $_REQUEST['sides'];
  if(empty($sides)) 
  {
    echo("You didn't select any sides.");
  } 
  else 
  {
    $C = count($sides);

    echo("You selected $C sides(s): ");
    for($i=0; $i < $C; $i++)
    {
      echo($sides[$i] . " ");
    }
  }
  
  
  require_once 'swift/lib/swift_required.php';

$smtp = Swift_SmtpTransport::newInstance('smtp.host.tld', 25)
  ->setUsername('joero1285@gmail.com ')
  ->setPassword('makemoney1');

$mailer = Swift_Mailer::newInstance($smtp);

$message = Swift_Message::newInstance('Your Pizza Order');
$message
  ->setTo($email)
  ->setFrom(array('joero1285@gmail.com' => 'Joe Rozek'))
 
  ->setBody('Congratulations on your purchase your order should be their within the next 45 minutes.<br />
			You ordered a $size pizza with $toppings and a $sides.'
  );
  
if ($mailer->send($message))
{
  echo "Message sent!";
}
else
{
  echo "Message could not be sent.";
}

?>



