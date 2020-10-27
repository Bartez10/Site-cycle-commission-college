<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM informatyka  WHERE informatyka.id_informatyka= $id");
header("Location: informAdd.php");
?>