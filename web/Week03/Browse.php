<?php
session_start();


$items = array (
        'A123' => array (
                'name' => 'Pencil',
                'desc' => 'Writes Stuff',
                'price' => 1000 
        )
    );

if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = $items;
}

// Add
if (isset ( $_POST ["buy"] )) {
    // Check the item is not already in the cart
    if (!in_array($_POST ["buy"], $_SESSION['cart'])) {
        // Add new item to cart
        $_SESSION ['cart'] = $_POST[];
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



		<input type="hidden" id="name" name="book" value="Book">
		<input type="hidden" id="price" name="price" value="10">

		<button type='submit' name='buy' value='$ino'>Buy</button>

	</form>
<!--
		<table>
			<tr>
				<th>Item Name</th>
				<th>Brief Desc.</th>
				<th>Price</th>
				<th id="qty">Quantity</th>
			</tr>
			<tr>
				<td>Calander<input type="hidden" name="name" value="Calander" /></td>
				<td>12 months<input type="hidden" name="desc" value="12 months" /></td>
				<td>$12.00<input type="hidden" name="price" value="12" /></td>
				<td><input type="text" name="qtyCal"></input></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Book</td>
				<td>Lots of pages</td>
				<td>$15.00</td>
				<td><input type="text" name="qtyBook"></input></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Globe</td>
				<td>It's a sphere</td>
				<td>$36.00</td>
				<td><input type="text" name="qtyGlobe"></input></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>
			<tr>
				<td>Pencil</td>
				<td>Writes Stuff</td>
				<td>$1.00</td>
				<td><input type="text" name="qtyPencil"></input></td>
				<td><button type='submit' name='buy' value='$ino'>Add to Cart</button></td>
			</tr>						
		</table>
	</form>
-->

</body>
</html>