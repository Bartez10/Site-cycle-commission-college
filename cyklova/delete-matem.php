<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM matem  WHERE matem.id_matem= $id");
header("Location: matemAdd.php");
?>