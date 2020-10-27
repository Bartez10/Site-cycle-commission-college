<?php
 $db = new PDO('mysql:host=localhost;dbname=pract1;charset=utf8', 'root', '');
 session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on") {
      header("Location: index.php");
  }
 
$sql = "INSERT INTO diploma (tema, student, kerivnyk) VALUES(:tema, :student, :kerivnyk)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":tema", $_POST["tema"]);
$stmt->bindValue(":student", $_POST["student"]);
$stmt->bindValue(":kerivnyk", $_POST["kerivnyk"]);
$stmt->execute();
header("Location: diplomaAdd.php");
?>