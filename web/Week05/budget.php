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
  <title>Budget</title>
</head>
<body >
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="enterExp.php">Enter Expenses</a></li>
      <li><a href="transactions.php">Transactions</a></li>
      <li><a class="active" href="budget.php">Budgets</a></li>
      <li><a href="update.php">Update</a></li>
  	</ul>

<h1>Budget</h1>


<form class="m-3 form-group mx-auto" action="" method="post">
    Budget: 
    <select name="budgetCategories">
    	<option>Select Budget</option>
		<?php
    		foreach ($db->query($budgetCat) as $row) {
   			echo "<option value=\"{$row['budget_name']}\">{$row['budget_name']}</option>";
    
			}
		?>
	</select><br /><br />
    <input class="btn btn-success m-2" type="submit" value="Search">
</form>

<?php
	
	$budget = $_POST['budgetCategories'];

	$query = "SELECT * FROM transaction where budget_id = 1"; 

	foreach ($db->query($query) as $row) {
    $id = $row['id'];
    echo '<strong>' . $row['date'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['budget_id'] . '</strong>' . ':';
    echo '<strong>' . $row['vend_id'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['payment_id'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['amount'] . '</strong>' . '&nbsp;';
   
}
?>

</body>
</html>