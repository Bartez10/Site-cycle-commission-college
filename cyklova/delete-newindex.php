<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM newIndex  WHERE newIndex.id = $id");
header("Location: newindexAdd.php");
?>