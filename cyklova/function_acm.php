<?php
function get_posts () {
  global $connection;
  $sql = "SELECT text FROM acm ORDER BY id_acm DESC";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
?>