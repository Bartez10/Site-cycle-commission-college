<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM vyhovnack WHERE vyhovnack.id_vyhovna = $id");
header("Location: dayOfCkADD.php");
?>