<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM ogoloshenya  WHERE ogoloshenya.id_odoloshenya = $id");
header("Location: ogoloshAdd.php");
?>