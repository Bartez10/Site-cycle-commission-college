<?php
        $servername = 'localhost';
       $username = 'root';
       $pass = '';
       $db = 'pract1';
       $connection = mysqli_connect($servername, $username, $pass, $db);
      if(mysqli_connect_error()){
          echo 'Помилка при підключенні до БД ('.mysqli_connect_errno().'):'.mysqli_connect_error();
      }
?>