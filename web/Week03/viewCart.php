<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	print_r($_SESSION['cart']);
	// Set a default total
	$total = 0;
	foreach ( $_SESSION['cart'] as $ino ) {
    	?>
	<tr>
    	<td>
        	Name: <?php echo $items[$ino]['name']; ?>
    	</td>
    	<td>
        	Price: <?php echo $items[$ino]["price"]; ?>
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