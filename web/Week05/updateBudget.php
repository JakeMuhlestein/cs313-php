<?php

	include("dbconnection.php");
	$db=get_db();
	$budget = $_POST['budgetName'];
	$amount = $_POST['amount'];


	if($_POST["update"]) {

		$query = "UPDATE budget_Item
				  SET budget_amount = '$amount'
				  WHERE budget_name = '$budget'";

		$stmt = $db->prepare($query);
		$stmt->execute();

	$new_page = "createBudget.php";

	header("Location: $new_page");
	die();


	}

	if($_POST["delete"]) {

		$query = "DELETE FROM budget_Item
				  WHERE budget_name = '$budget'";

		$query2 = "DELETE FROM budget_Item
				  WHERE budget_name = '$budget'";

		$stmt = $db->prepare($query);
		$stmt->execute();

	$new_page = "createBudget.php";

	header("Location: $new_page");
	die();


	}	

?>