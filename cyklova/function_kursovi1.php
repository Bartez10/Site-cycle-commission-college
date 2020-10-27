<?php
function get_kurs () {
  global $connection;
  $sql = "SELECT * FROM kursovi1";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
?>