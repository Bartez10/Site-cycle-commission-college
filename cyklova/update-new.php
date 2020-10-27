<?php
include 'db_connection.php';
$id = $_POST['id'];
$title = $_POST['title'];
$text1 = $_POST['text1'];
$text = $_POST['text'];
$date = $_POST['date'];
mysqli_query($connection, "UPDATE news SET title = '$title', text1 = '$text1', text='$text', date='$date' WHERE news.id = $id");
header("Location: newsAdd.php");
?>