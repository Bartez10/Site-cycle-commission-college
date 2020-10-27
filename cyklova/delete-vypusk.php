<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM vypusk  WHERE vypusk.id_vypusk = $id");
header("Location: vypuskAdd.php");
?>