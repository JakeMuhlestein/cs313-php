<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Budget App</title>
</head>
<body >
<h1>Budget App Menu</h1>

<a class="m-3" href="enterExp.php">Enter New Expense</a><br />
<a class="m-3" href="transactions.php">See All Transactions</a><br />
<a class="m-3" href="budget.php">Budget</a><br />
<a class="m-3" href="update.php">Update Form Information</a><br />

</body>
</html>