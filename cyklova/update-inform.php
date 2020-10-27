<?php
include 'db_connection.php';
$id = $_POST['id'];
$rik = $_POST['rik'];
$text = $_POST['text'];
mysqli_query($connection, "UPDATE informatyka SET rik = '$rik',  text='$text' WHERE informatyka.id_informatyka = $id");
header("Location: informAdd.php");
?>