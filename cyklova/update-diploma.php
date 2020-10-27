<?php
include 'db_connection.php';
$id = $_POST['id'];
$tema = $_POST['tema'];
$student = $_POST['student'];
$kerivnyk = $_POST['kerivnyk'];
mysqli_query($connection, "UPDATE diploma SET tema = '$tema',  student='$student', kerivnyk='$kerivnyk' WHERE diploma.id_diploma = $id");
header("Location: diplomaAdd.php");
?>