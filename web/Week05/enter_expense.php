<?php

	include("dbconnection.php");
	$db=get_db();


	$transDate = date($_POST['date']);
	$budget = 0;
	$payment = 0;
	$vendor = 0;
	$amount = $_POST['amount'];


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


	$stmt = $db->prepare('INSERT INTO transaction(transdate, vend_id, payment_id, budget_id, amount) VALUES (:transDate, :vendor, :payment, :budget, :amount)');

	$stmt->bindValue(':transDate', $transDate);
	$stmt->bindValue(':vendor', $vendor);
	$stmt->bindValue(':payment', $payment);
	$stmt->bindValue(':budget', $budget);
	$stmt->bindValue(':amount', $amount);
	$stmt->execute();

	$new_page = "transactions.php";

	header("Location: $new_page");
	die();

?>