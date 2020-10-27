<?php
include 'db_connection.php';
$idd = $_POST['id'];
$surname_vypusk = $_POST['surname_vypusk'];
$name_vypusk = $_POST['name_vypusk'];
$twoname_vypusk = $_POST['twoname_vypusk'];
$rik = $_POST['rik'];
$work = $_POST['work'];
$vyd = $_POST['vyd'];
$linkedin = $_POST['linkedin'];
mysqli_query($connection, "UPDATE vypusk SET surname_vypusk = '$surname_vypusk', name_vypusk = '$name_vypusk', twoname_vypusk = '$twoname_vypusk', rik = '$rik', work = '$work', vyd='$vyd', linkedin='$linkedin' WHERE vypusk.id_vypusk = $idd");
header("Location: vypuskAdd.php");
?>