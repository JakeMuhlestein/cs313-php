<?php
session_start();

if (isset ( $_POST ['delete'] )) { // a remove button has been clicked
    // Remove the item from the cart
    foreach ($_SESSION['cart'] as $current_key => $current_array) {
    echo "current key: $current_key\n";
    foreach ($arrays as $search_key => $search_array) {
        if ($search_array['name'] == $current_array['name']) {
            if ($search_key != $current_key) {
            echo "duplicate found: $search_key\n";
            }
        }
    }
    echo "\n";

    if (false !== $key = array_search($_POST['delete'], $_SESSION['cart'])) {
        unset($_SESSION['cart'][$key]);
    }
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
  		<li><a class="active" href="Browse.php">Home</a></li>
  		<li><a href="viewCart.php">Cart</a></li>
  		<li><a href="checkOut.php">Checkout</a></li>
	</ul>

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