<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM newIndex ORDER BY id DESC";
  $result = mysqli_query($connection, $sql);

  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
