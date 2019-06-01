<?php

	include("dbconnection.php");
	//$db = get_db();
	$budgetId = htmlspecialchars($_POST['budgetName']);

	$budget = "SELECT FIRST(id) FROM budget_item b WHERE b.budget_name = $budgetId";
	
	//$db->query($res);
	//$budget = pg_fetch_result($res,0,0);
	//$budget->execute();

	//$res = pg_query($db, "SELECT id FROM budget_item b WHERE b.budget_name = $budgetId");
	//$budget = pg_fetch_array($res);

	$date = htmlspecialchars($_POST['date']);
	$amount = htmlspecialchars($_POST['amount']);

	
	//$budget = "SELECT id FROM budget_item b WHERE b.budget_name = $budgetId";
	//htmlspecialchars($_POST['budgetName']);
	$payment = htmlspecialchars($_POST['payType']);
	$vendor = htmlspecialchars($_POST['vendor']);

	//echo $date;
	echo $budget;
	//echo $payment;
	echo $vendor;
	//echo $amount;

	$db = get_db();

	$stmt = $db->prepare('INSERT INTO transaction(date, vend_id, payment_id, budget_id, amount) VALUES ($date, $vendor, $payment, $budget, $amount)');
	$stmt->execute();

	//$new_page = "transactions.php";

	//header("Location: $new_page");
	//die();



?>