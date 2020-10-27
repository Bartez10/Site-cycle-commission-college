<?php
include 'db_connection.php';
$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM teacher  WHERE teacher.id_teacher = $id");
header("Location: teacherAdd.php");
?>