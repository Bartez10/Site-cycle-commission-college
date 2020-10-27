<?php
include 'db_connection.php';
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
mysqli_query($connection, "UPDATE vyhovna SET title = '$title',  text='$text' WHERE vyhovna.id_vyhovna = $id");
header("Location: openVyhADD.php");
?>