<?php

	include("dbconnection.php");
	$db=get_db();

	

	
	if($_POST["pay"]) {

	$payment = $_POST['payment'];

	$query = "INSERT INTO pay_method
			(card_name)
			VALUES (:payment)";

	$stmt = $db->prepare($query);

	$stmt->bindValue(':payment', $payment);

	$stmt->execute();

	$new_page = "update.php";

	header("Location: $new_page");
	die();

	}
		
	if($_POST["vend"]) {
	
	$vendor = $_POST['vendor'];

	echo $vendor;
	$query = "INSERT INTO vendors 
				(vendor_name)
			VALUES (:vendor)";

	$stmt = $db->prepare($query);

	$stmt->bindValue(':vendor', $vendor);

	$stmt->execute();

	//$new_page = "update.php";

	//header("Location: $new_page");
	//die();

	}
?>

	