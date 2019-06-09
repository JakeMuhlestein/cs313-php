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
  <title>Update</title>
</head>
<body >

	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="enterExp.php">Enter Expenses</a></li>
      <li><a href="transactions.php">Transactions</a></li>
      <li><a href="budget.php">Budgets</a></li>
      <li><a class="active" href="update.php">Update</a></li>
	  <li><a href="createBudget.php">Create Budget</a></li>
  	</ul>
	<h1>Update</h1>
	<form action="updateList.php" method="post">
		Add Payment Type: <input type="text" name="payment">
		<input type="submit" name="payment" value="Update">
	</form>
	<form action="updateList.php" method="post">
		Add Vendor: <input type="text" name="vendor">
		<input type="submit" name="vendor" value="Update">
	</form>


</body>
</html>