<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM vyhovna ORDER BY id_vyhovna DESC";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
?>