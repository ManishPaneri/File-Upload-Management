<?php require_once("includes/connection.php"); ?>
<?php
$id = $_POST['id']; 

$query="DELETE FROM `folder_database` WHERE`id`='$id' LIMIT 1";
//echo $query;
$result = mysql_query($query, $connection);

?>

