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
echo json_encode($_SESSION['cart']);
// Set a default total
$total = 0;
foreach ( $_SESSION['cart'] as $ino ) {
    ?>
<tr>
    <td>
        Name: <?php echo $ino['name']; ?>
    </td>
    <td>
        Price: <?php echo $ino['price']; ?>
    </td>
    <td>
        <button type='submit' name='delete' value='<?php echo $ino; ?>'>Remove</button><br>
    </td>
</tr>
<?php
    $total += $ino['price'];
} // end foreach
?>

Total: $<?php echo $total; ?>
</body>
</html>