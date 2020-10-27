<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM vyhovna  WHERE vyhovna.id_vyhovna = $id");
header("Location: openVyhADD.php");
?>