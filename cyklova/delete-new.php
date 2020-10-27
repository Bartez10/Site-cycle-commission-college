<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM news  WHERE news.id = $id");
header("Location: newsAdd.php");
?>