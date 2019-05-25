    
<?php 
    
    include("dbconnection.php");
    $id = $_GET['id'];
    $query = "SELECT * 
            FROM scriptures_table 
            WHERE id = $id";
echo "<h1>Scripture Resources</h1>";
foreach ($db->query($query) as $row) {
    echo '<p class="m-3" href="details.php">';
    echo '<strong>' . $row['book'] . '</strong>' . '&nbsp;';
    echo '<strong>' . $row['chapter'] . '</strong>' . ':';
    
    echo '<strong>' . $row['verse'] . '</strong>' . '&nbsp;' . '-';
  
    echo '"' . $row['content'] . '"';
    echo '</p><br>';
}
?>