<?php

	include("dbconnection.php");

	$budget = htmlspecialchars($_POST['budgetName']);
	$payment = htmlspecialchars($_POST['cardName']);
	$vendor = htmlspecialchars($_POST['vendorName']);
	$amount = htmlspecialchars($_POST['amount']);

	$db = get_db();

	$stmt = $db->prepare('INSERT INTO transaction(vend_id, payment_id, budget_id, amount)
						VALUES ($vendor, $payment, $budget, $amount)');

	$new_page = "transactions.php";

	header("Location: $new_page");
	die();



?>