<?php
include 'db_connection.php';
$id = $_POST['id'];
$tema = $_POST['tema'];
$student = $_POST['student'];
mysqli_query($connection, "UPDATE kursovi1 SET tema = '$tema',  student='$student' WHERE kursovi1.id_kursovi = $id");
header("Location: kursovi3Add.php");
?>