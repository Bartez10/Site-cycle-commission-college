<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM acm  WHERE acm.id_acm = $id");
header("Location: acmAdd.php");
?>