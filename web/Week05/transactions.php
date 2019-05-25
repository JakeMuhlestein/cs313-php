<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body >

<?php
//$transactions = $_POST['book'];          
$query = "SELECT * 
            FROM transaction"; 
            //WHERE LOWER(book)=" ."LOWER('" . $book ."')";
foreach ($db->query($query) as $row) {
    $id = $row['id'];
    echo '<strong>' . $row['budget_id'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['date'] . '</strong>' . ':';
    echo '<strong>' . $row['vend_id'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['payment_id'] . '</strong>' . '&nbsp;';
   
}



?>
</body>
</html>