<?php
include 'db_connection.php';
$idd = $_POST['id'];
$surname_teacher = $_POST['surname_teacher'];
$name_teacher = $_POST['name_teacher'];
$twoname_teacher = $_POST['twoname_teacher'];
$title = $_POST['title'];
$text = $_POST['text'];
$text1 = $_POST['text1'];
mysqli_query($connection, "UPDATE teacher SET surname_teacher = '$surname_teacher', name_teacher = '$name_teacher', twoname_teacher = '$twoname_teacher', title = '$title', text = '$text', text1='$text1' WHERE teacher.id_teacher = $idd");
header("Location: teacherAdd.php");
?>