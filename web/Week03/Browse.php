<?php
session_start();
if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array ();
}

// Add
if (isset ( $_POST ["buy"] )) {
    // Check the item is not already in the cart
    if (!in_array($_POST ["buy"], $_SESSION['cart'])) {
        // Add new item to cart
        $_SESSION ['cart'][] = $_POST["buy"];
    }
}


?>




<html>
<head>

	<title>Browse Items</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>

	<ul>
  		<li><a class="active" href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a href="checkOut.php">Checkout</a></li>
	</ul>



	<h2>Store</h2>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		<table>
			<tr>
				<th>Item Name</th>
				<th>Brief Desc.</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<tr>
				<td>Calander</td>
				<td>12 months</td>
				<td>$12.00</td>
				<td><input type="text" name="qtyCal"></ins></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Book</td>
				<td>Lots of pages</td>
				<td>$15.00</td>
				<td><input type="text" name="qtyBook"></ins></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Globe</td>
				<td>It's a sphere</td>
				<td>$36.00</td>
				<td><input type="text" name="qtyGlobe"></ins></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Pencil</td>
				<td>Writes Stuff</td>
				<td>$1.00</td>
				<td><input type="text" name="qtyPencil"></ins></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>						
		</table>
	</form>


</body>
</html>