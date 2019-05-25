<?php
include("dbconnection.php");

$budgetCat = "SELECT budget_name FROM budget_item"; 

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
  <title>Document</title>
</head>
<body >
	Enter Exp: <br />
    <form class="m-3 form-group mx-auto" action="" method="post">
    <select name="budgetCategories">
    	<option>Select Budget</option>
	<?php
    foreach ($db->query($budgetCat) as $row) {
	//while ($rows = $budgetCat->fetch_assoc()) {

		//$cat_name = $rows['budget_name'];
		//echo "<option value='$budget_name'>$cat_name</";

   echo "<option value=\"{$row['budget_name']}\">{$row['budget_name']}</option>";
    //echo '</a><br>';
	}
	?>
	</select><br />


    <input class="btn btn-success m-2" type="submit" value="Enter Expense">
    </form>

</body>
</html>
