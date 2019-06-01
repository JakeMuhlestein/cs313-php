<?php

	include("dbconnection.php");

	$budget = htmlspecialchars($_POST['budgetName']);
	$payment = htmlspecialchars($_POST['payType']);
	$vendor = htmlspecialchars($_POST['vendor']);
	$amount = htmlspecialchars($_POST['amount']);

	echo $budget;
	echo $payment;
	echo $vendor;
	echo $amount;

	$db = get_db();

	$stmt = $db->prepare('INSERT INTO transaction(vend_id, payment_id, budget_id, amount)VALUES ($vendor, $payment, $budget, $amount)');
	$stmt->execute();

	//$new_page = "transactions.php";

	//header("Location: $new_page");
	//die();



?>