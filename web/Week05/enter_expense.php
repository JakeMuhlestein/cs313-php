<?php

	include("dbconnection.php");
	$db=get_db();


	$budgetId = htmlspecialchars($_POST['budgetName']);
	//echo $budgetId;
	
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
	//$budget = htmlspecialchars($_POST['budgetName']);
	//$payment = htmlspecialchars($_POST['payType']);
	//$vendor = htmlspecialchars($_POST['vendor']);
	$amount = htmlspecialchars($_POST['amount']);

	echo $date;
	echo $budget;
	echo $payment;
	echo $vendor;
	echo $amount;

	//require("dbconnection.php");
	//$db = get_db();

	$query = 'INSERT INTO transaction (date, vend_id, payment_id, budget_id, amount) VALUES (DEFAULT, '$date', '$vendor', '$payment', '$budget', '$amount')';

	//$stmt = $db->prepare('INSERT INTO transaction(vend_id, payment_id, budget_id, amount) VALUES (:vendor, :payment, :budget, :amount);');


	//pg_query($db, $sql);

	$stmt = $db->prepare($query);

	//$stmt->bindValue(':date', $date, PDO::PARAM_STR);
	//$stmt->bindValue(':vendor', $vendor, PDO::PARAM_INT);
	//$stmt->bindValue(':payment', $payment, PDO::PARAM_INT);
	//$stmt->bindValue(':budget', $budget, PDO::PARAM_INT);
	//$stmt->bindValue(':amount', $amount, PDO::PARAM_INT);
	$stmt->execute();
	//$result = pg_query($db, $query);

	$new_page = "transactions.php";

	header("Location: $new_page");
	die();

?>