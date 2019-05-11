<?php
session_start();



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
  		<li><a class="active" href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a href="checkOut.php">Checkout</a></li>
	</ul>

<?php
print_r($_SESSION['cart']);
// Set a default total
$total = 0;
foreach ( $_SESSION['cart'] as $ino ) {
    ?>
<tr>
    <td>
        Name: <?php echo $_SESSION['cart']['name']; ?>
    </td>
    <td>
        Price: <?php echo $items['cart']['price']; ?>
    </td>
    <td>
        <button type='submit' name='delete' value='<?php echo $ino; ?>'>Remove</button>
    </td>
</tr>
<?php
    $total += $items[$ino]['price'];
} // end foreach
?>

Total: $<?php echo $total; ?>
</body>
</html>