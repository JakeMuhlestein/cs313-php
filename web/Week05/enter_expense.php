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

	//echo $budget;
	//echo $payment;
	//echo $vendor;
	//echo $amount;


	$db = get_db();

	$sql = "INSERT INTO transaction(date, vend_id, payment_id, budget_id, amount) VALUES ('$date', '$vendor', '$payment', '$budget', '$amount')";
	//$stmt = $db->prepare('INSERT INTO transaction(date, vend_id, payment_id, budget_id, amount) VALUES (:date, :vendor, :payment, :budget, :amount);');
	pg_query($db, $sql);

	//$stmt = $this->pdo->prepare($sql);

	//$stmt->bindValue(':date', '2019-06-01', PDO::PARAM_STR);
	//$stmt->bindValue(':vendor', 1, PDO::PARAM_INT);
	//$stmt->bindValue(':payment', 2, PDO::PARAM_INT);
	//$stmt->bindValue(':budget', 2, PDO::PARAM_INT);
	//$stmt->bindValue(':amount', 17.50, PDO::PARAM_INT);
	//$stmt->execute();
	//$result = pg_query($db, $query);

	$new_page = "transactions.php";

	header("Location: $new_page");
	die();



?>