<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM kursovi2  WHERE kursovi2.id_kursovi = $id");
header("Location: kursovi4Add.php");
?>