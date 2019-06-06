<?php

	include("dbconnection.php");
	$db=get_db();
	$budget = $_POST['newBudget'];
	$amount = $_POST['newAmount'];

	echo $budget;
	echo $amount;


	$query = "INSERT INTO budget_Itemm 
			(budget_name, budget_amount)
			VALUES (:budget, :amount)";

	$stmt = $db->prepare($query);

	$stmt->bindValue(':budget', $budget);
	$stmt->bindValue(':amount', $amount);
	$stmt->execute();

	$new_page = "createBudget.php";

	header("Location: $new_page");
	die();
?>

	