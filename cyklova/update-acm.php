<?php
include 'db_connection.php';
$id = $_POST['id'];
$rik = $_POST['rik'];
$text = $_POST['text'];
mysqli_query($connection, "UPDATE acm SET rik = '$rik',  text='$text' WHERE acm.id_acm = $id");
header("Location: acmAdd.php");
?>