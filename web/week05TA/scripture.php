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
		Text: <textarea name="comment"></textarea><br />



    <?php 
      $query1 = "SELECT * FROM topic";
      foreach ($db->query($query1) as $row) {
        echo '<input type="checkbox" name="topic[]" value="'.$row['name'] .'">' .$row['name'].' <br>';
      }
   
    ?>

	</form>


</body>
</html>