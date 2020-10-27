<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM kursovi1  WHERE kursovi1.id_kursovi = $id");
header("Location: kursovi3Add.php");
?>