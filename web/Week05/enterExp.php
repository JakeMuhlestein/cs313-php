<?php
include("dbconnection.php");
$db=get_db();

$budgetCat = "SELECT budget_name FROM budget_item
	 	  	  WHERE active = true"; 
$payment = "SELECT card_name FROM pay_method";
$vendor = "SELECT vendor_name FROM vendors";
$today = date("Y-m-d");

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
  <title>Enter Expense</title>
</head>
<body >

	
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="enterExp.php">Enter Expenses</a></li>
      <li><a href="transactions.php">Transactions</a></li>
      <li><a href="budget.php">Budgets</a></li>
      <li><a href="update.php">Update</a></li>
	  <li><a href="createBudget.php">Create Budget</a></li>
  	</ul>

	<h1>Enter Expenses</h1> <br />
    <form class="m-3 form-group mx-auto" action="enter_expense.php" method="POST">
    Date:  
    <input name="date" type="text" value="<?php echo $today; ?>" />
    <br /><br />
    Budget:  
    <select name="budgetName">
    	<option>Select Budget</option>
		<?php
    		foreach ($db->query($budgetCat) as $row) {
   			echo "<option value=\"{$row['budget_name']}\">{$row['budget_name']}</option>";
    
			}
		?>
	</select><br /><br />
	Pay Method:  
	    <select name="payType">
    	<option>Select Payment</option>
		<?php
    		foreach ($db->query($payment) as $row) {
   			echo "<option value=\"{$row['card_name']}\">{$row['card_name']}</option>";
    
			}
		?>
	</select><br /><br />
	Vendor:  
	    <select name="vendor">
    	<option>Select Vendor</option>
		<?php
    		foreach ($db->query($vendor) as $row) {
   			echo "<option value=\"{$row['vendor_name']}\">{$row['vendor_name']}</option>";
    
			}
		?>
	</select><br /><br />
	Amount:  
	<input type="text" name="amount"><br /><br />


    <input class="btn btn-success m-2" type="submit" value="Enter Expense">

    </form>

	<br />

    <form action="update.php" method="post">
    	<input class="btn btn-success m-2" type="submit" value="Update Form Info">
    </form>
    	


 	

</body>
</html>
