<?php
session_start();
$_SESSION['cart']=array();

?>


<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="week03.css">
</head>
<body>

	<ul>
  		<li><a class="active" href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a href="checkOut.php">Checkout</a></li>
	</ul>



	<h2>Store</h2>

	<form action="ViewCart.php" method="post">
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
				<td><input type="submit" value="Add to Cart"> </td>
			</tr>
			<tr>
				<td>Book</td>
				<td>Lots of pages</td>
				<td>$15.00</td>
				<td><input type="text" name="qtyBook"></ins></td>
				<td><input type="submit" value="Add to Cart"> </td>
			</tr>
			<tr>
				<td>Globe</td>
				<td>It's a sphere</td>
				<td>$36.00</td>
				<td><input type="text" name="qtyGlobe"></ins></td>
				<td><input type="submit" value="Add to Cart"> </td>
			</tr>
			<tr>
				<td>Pencil</td>
				<td>Writes Stuff</td>
				<td>$1.00</td>
				<td><input type="text" name="qtyPencil"></ins></td>
				<td><input type="submit" value="Add to Cart"> </td>
			</tr>						
		</table>
	</form>


</body>
</html>