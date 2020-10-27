<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM rozklad  WHERE rozklad.id_rozklad = $id");
header("Location: rozkladAdd.php");
?>