<?php
	include("dbconnection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Scriptures</title>
</head>
<body>

	<form action="" method="post">
		Book:<input type="text" name="book"><br />
		Chapter:<input type="text" name="chapter"><br />
		Verse:<input type="text" name="verse"><br />
		Text: <textarea name="comment"></textarea>



		<?php
		//$transactions = $_POST['book'];          
			$query = "SELECT * 
            	FROM topic"; 
            	//WHERE LOWER(book)=" ."LOWER('" . $book ."')";
			foreach ($db->query($query) as $row) {
   			echo "<input type="checkbox" value=\"{$row['name']}\">{$row['name']}";
    
			
			}

		?>
	</form>


</body>
</html>