<?php
session_start();

$secretPassword = '12345';
$_Login = 'admin';

if ( $_POST["login"] == $_Login && $_POST["password"] == $secretPassword ){
  $_SESSION["login"] = "on";
  header("Location: admin.php");
}
else {
  header("Location: login.php");
}
?>