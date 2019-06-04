<?php

	include("dbconnection.php");
	$db=get_db();

	//ransDate = $_POST['transDate'];
	//transDate = new DateTime('$transDate');
	$transDate = $_POST['transDate'];



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
/*
	$date = htmlspecialchars($_POST['date']);
	//$budget = htmlspecialchars($_POST['budgetName']);
	//$payment = htmlspecialchars($_POST['payType']);
	//$vendor = htmlspecialchars($_POST['vendor']);
	$amount = htmlspecialchars($_POST['amount']);
*/
	//$date = $_POST['date'];
	//$budget = 2;
	//$payment = 2;
	//$vendor = 2;
	//$amount = $_POST['amount'];




	echo $transDate;
	echo $budget;
	echo $payment;
	echo $vendor;
	echo $amount;

	//require("dbconnection.php");
	//$db = get_db();

	//$query = "INSERT INTO transaction (vend_id, payment_id, budget_id, amount) VALUES ( '$vendor', '$payment', '$budget', '$amount')";

	$stmt = $db->prepare('INSERT INTO transaction(transdate, vend_id, payment_id, budget_id, amount) VALUES (:transDate, :vendor, :payment, :budget, :amount)');
//echo $amount * 2;

	//pg_query($db, $sql);
//pg_insert($db, transaction, $query);
	//$stmt = $db->prepare($query);

	$stmt->bindValue(':transDdate', $transDate);
	$stmt->bindValue(':vendor', $vendor);
	$stmt->bindValue(':payment', $payment);
	$stmt->bindValue(':budget', $budget);
	$stmt->bindValue(':amount', $amount);
	$stmt->execute();
	//$result = pg_query($db, $query);

	$new_page = "transactions.php";

	header("Location: $new_page");
	die();

?>