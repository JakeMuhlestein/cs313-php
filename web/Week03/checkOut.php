<?php


session_start();

if (isset($_POST['cart'])){
  header("Location: viewCart.php");
}
?>
<?php
if (isset($_POST['submit'])){
  header("Location: confirmation.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>
	<ul>
  		<li><a href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a class="active" href="checkOut.php">Checkout</a></li>
	</ul>


	<p>Please enter the shipping address</p>
	Name <input type="text" name="name"><br>
	Address <input type="text" name="address"><br>
	City<input type="text" name="city"><br>
	State<input type="text" name="state"><br>
	Zip<input type="text" name="zip"><br>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		<input type="submit" id="cart" name="cart" value="Go Back to Cart">
	</form>
	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		<input type="submit" id="submit" name="submit" value="Submit Order">
	</form>



</body>
</html>