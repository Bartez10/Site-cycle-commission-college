<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM diploma  WHERE diploma.id_diploma = $id");
header("Location: diplomaAdd.php");
?>