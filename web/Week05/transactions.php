<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="week05.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Transactions</title>
</head>
<body >
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="enterExp.php">Enter Expenses</a></li>
      <li><a class="active" href="transactions.php">Transactions</a></li>
      <li><a href="budget.php">Budgets</a></li>
      <li><a href="update.php">Update</a></li>

  	</ul>

<h1>Transactions</h1> <br />
<table>
	<tr>
		<th>Date</th>
		<th>Budget</th>
		<th>Vendor</th>
		<th>Payment</th>
		<th>Amount</th>
	</tr>


<?php
	
	$budget = $_POST['budgetCategories'];



  	$query = "SELECT * FROM transaction AS t
    	JOIN pay_method AS p ON t.payment_id = p.id
    	JOIN vendors v ON t.vend_id = v.id
		JOIN budget_item AS b ON t.budget_id = b.id WHERE"; 

	foreach ($db->query($query) as $row) {
	$budgetTotal = $budgetTotal + $row['amount'];	
    echo '<tr>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['budget_name'] . '</td>';
    echo '<td>' . $row['vendor_name'] . '</td>';
    echo '<td>' . $row['card_name'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    echo '</tr>';

    }
    
?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>Total:</td>
		<td><?php echo $budgetTotal ?></td>
	</tr>
</table>
</body>
</html>