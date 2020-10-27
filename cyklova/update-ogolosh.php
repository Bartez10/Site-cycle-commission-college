<?php
include 'db_connection.php';
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text1'];
mysqli_query($connection, "UPDATE ogoloshenya SET title = '$title', text1 = '$text' WHERE ogoloshenya.id_odoloshenya = $id");
header("Location: ogoloshAdd.php");

?>