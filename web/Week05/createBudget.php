<?php
include("dbconnection.php");
$db=get_db();
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
  		<title>Budget App</title>
	</head>
	<body>

	<ul>
    	<li><a href="index.php">Home</a></li>
    	<li><a href="enterExp.php">Enter Expenses</a></li>
    	<li><a href="transactions.php">Transactions</a></li>
    	<li><a href="budget.php">Budgets</a></li>
    	<li><a href="update.php">Update</a></li>
    	<li><a class="active" href="createBudget.php">Create Budget</a></li>
  	</ul>

<!--<form action="" method="post"> -->
  	<table>
	<tr>
		<th>Budget</th>
		<th>Amount</th>
	</tr>


	<?php
	
  		$query = "SELECT * FROM budget_item"; 

		foreach ($db->query($query) as $row) {
      echo '<form action="updateBudget.php" method="post">';
    	echo '<tr>';
      echo "<td> <input type='hidden' name='budgetName' value=\"{$row['budget_name']}\" >";
    	echo $row['budget_name'] . '</td>';
    	echo "<td><input type='text' name='amount' value=\"{$row['budget_amount']}\">";
      echo "<input type='submit' name='update' value='Update'>";
      echo "<input type='submit' name='delete' value='Delete'></td>";
    	echo '</tr>';
      echo "</form>";
    	}

    
	?>
  <form action="addNew.php" method="post">
  <tr>
    <td><input type="text" name="newBudget"></td>
    <td><input type="text" name="newAmount">
    <input type="submit" value="Add/Edit budget"></td>
  </tr>
  </form>
  </table>
  
	</body>
</html>