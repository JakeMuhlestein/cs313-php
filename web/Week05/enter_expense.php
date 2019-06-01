<?php

	include("dbconnection.php");

	$budgetId = htmlspecialchars($_POST['budgetName']);
	$query = "SELECT * FROM budget_item WHERE budget_name = '$budgetId'";
	foreach ($db->query($query) as $row) {
    	$budget = $row['id'];
    }

	$payment = htmlspecialchars($_POST['payType']);
	$query = "SELECT * FROM pay_method WHERE card_name = '$payment'";
	foreach ($db->query($query) as $row) {
    	$payment = $row['id'];
    }



	$vendor = htmlspecialchars($_POST['vendor']);
	$query = "SELECT * FROM vendors WHERE vendor_name = '$vendor'";
	foreach ($db->query($query) as $row) {
    	$vendor = $row['id'];
    }


	$date = htmlspecialchars($_POST['date']);
	$amount = htmlspecialchars($_POST['amount']);

	echo $date;
	echo $budget;
	echo $payment;
	echo $vendor;
	echo $amount;

	//$db = get_db();

	//$stmt = $db->prepare('INSERT INTO transaction(date, vend_id, payment_id, budget_id, amount) VALUES ($date, $vendor, $payment, $budget, $amount)');
	//$stmt->execute();

	//$new_page = "transactions.php";

	//header("Location: $new_page");
	//die();



?>