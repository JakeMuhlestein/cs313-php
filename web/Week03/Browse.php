<?php
session_start();



if (! isset ( $_SESSION ['cart'] )) {
    $_SESSION ['cart'] = array();
}

// Add
if (isset ( $_POST ["buy"] )) {

	$Name = $_POST['name'];
	$Price = $_POST['price'];
	$Qty = $_POST['qty'];


	$items = array('name' => "$Name", 'price' => "$Price", 'qty' => "$Qty");

    // Check the item is not already in the cart
    //<?php


        // Add new item to cart
       
    array_push($_SESSION ['cart'] ,$items); 
   
	 // end foreach
	//
	
}

?>
<html>
<head>

	<title>School Supply Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>

	<ul>
  		<li><a class="active" href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a href="checkOut.php">Checkout</a></li>
	</ul>




	<h2>School Supply Store</h2>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		Item: Book<input type="hidden" id="book" name="name" value="Book">
		Price: $10.00 <input type="hidden" id="price" name="price" value="10">
		<button type='submit' name='buy' value='$ino'>Buy</button>
	</form>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		Item: Map<input type="hidden" id="book" name="name" value="Map">
		Price: $5.00 <input type="hidden" id="price" name="price" value="5">
		<button type='submit' name='buy' value='$ino'>Buy</button>
	</form>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		Item: Crayons<input type="hidden" id="crayon" name="name" value="Crayons">
		Price: $3.00 <input type="hidden" id="price" name="price" value="3">
		<button type='submit' name='buy' value='$ino'>Buy</button>
	</form>

	<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
		Item: Spiral Notebook<input type="hidden" id="notebook" name="name" value="Spiral Notebook">
		Price: $2.00 <input type="hidden" id="price" name="price" value="2">
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