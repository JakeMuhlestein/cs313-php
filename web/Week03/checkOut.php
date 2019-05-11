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
	Name <input type="text" name="name">
	Address <input type="text" name="address">
	City<input type="text" name="city">
	State<input type="text" name="state">
	Zip<input type="text" name="zip">

	<button type="submit" onclick="viewCart.php">Go Back to Cart</button>
	<button type="submit" onclicj="confirmation.php">Check Out</button>


</body>
</html>