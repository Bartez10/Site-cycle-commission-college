<?php
include 'db_connection.php';
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
mysqli_query($connection, "UPDATE vyhovnack SET title = '$title',  text='$text' WHERE vyhovnack.id_vyhovna = $id");
header("Location: dayOfCkADD.php");
?>