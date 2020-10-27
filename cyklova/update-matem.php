<?php
include 'db_connection.php';
$id = $_POST['id'];
$rik = $_POST['rik'];
$text = $_POST['text'];
mysqli_query($connection, "UPDATE matem SET rik = '$rik',  text='$text' WHERE matem.id_matem = $id");
header("Location: matemAdd.php");
?>