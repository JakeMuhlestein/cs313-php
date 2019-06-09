<?php

	include("dbconnection.php");
	$db=get_db();
	$budget = $_POST['newBudget'];
	$amount = $_POST['newAmount'];
	$active = true;

	echo $budget;
	echo $amount;


	$query = "INSERT INTO budget_Item 
			(budget_name, budget_amount, active )
			VALUES (:budget, :amount, :active)";

	$stmt = $db->prepare($query);

	$stmt->bindValue(':budget', $budget);
	$stmt->bindValue(':amount', $amount);
	$stmt->bindValue(':active', $active);
	$stmt->execute();

	$new_page = "createBudget.php";

	header("Location: $new_page");
	die();
?>

	