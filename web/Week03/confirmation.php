<?php


	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>
	<ul>
  		<li><a href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a class="active" href="checkOut.php">Checkout</a></li>
	</ul>

<h1>Order Compete!</h1><br><br>

Shipping Info:<br>
<?php

	echo "Name: " . $_SESSION["custName"] . ".<br>";
	echo "Address: " . $_SESSION["custAddress"] . ".<br>";
	echo "City: " . $_SESSION['custCity'] . "State: " . $_SESSION['custState'] . "Zip: " . $_SESSION['custZip'] .;


?>

<br><br>Items Ordered:<br>

<?php
$total = 0;
foreach ( $_SESSION['cart'] as $ino) {
?>
<tr>
    <td>

        Name: <?php echo $ino['name']; ?>
    </td>
    <td>
        Price: <?php echo $ino['price']; ?>
    </td>
</tr>
<br>
<?php
    $total += $ino['price'];
} // end foreach
?>

Total: $<?php echo $total; ?>



</body>
</html>