<?php
include 'db_connection.php';
$id = $_POST['id'];
$tema = $_POST['tema'];
$student = $_POST['student'];
mysqli_query($connection, "UPDATE kursovi2 SET tema = '$tema',  student='$student' WHERE kursovi2.id_kursovi = $id");
header("Location: kursovi4Add.php");
?>