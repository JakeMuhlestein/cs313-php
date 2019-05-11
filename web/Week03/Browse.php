<?php
session_start();
if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array ();
}

$items = array (
        'A123' => array (
                'name' => 'Item1',
                'desc' => 'Item 1 description...',
                'price' => 1000 
        )
    )

// Add
if (isset ( $_POST ["buy"] )) {
    // Check the item is not already in the cart
    //if (!in_array($_POST ["buy"], $_SESSION['cart'])) {
        // Add new item to cart
        $_SESSION ['cart'][] = $_POST["buy"];
    //}
}


if (isset($_POST['buy']))
{
    $getmsg = $_POST['cart'];
    echo $getmsg;
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
				<th id="name">Item Name</th>
				<th id="desc">Brief Desc.</th>
				<th id="price">Price</th>
				<th id="qty">Quantity</th>
			</tr>
			<tr>
				<td headers="name">Calander</td>
				<td headers="desc">12 months</td>
				<td headers="price">$12.00</td>
				<td headers="qty"><input type="text" name="qtyCal"></ins></td>
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