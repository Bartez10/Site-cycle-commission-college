<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM ogoloshenya ORDER BY id_odoloshenya DESC";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
 function get_post_by_id ($post_id){
   global $connection;
   $sql = "SELECT * FROM ogoloshenya WHERE id_odoloshenya = ".$post_id;
   $result = mysqli_query ($connection, $sql);
   $post=mysqli_fetch_assoc($result);
   return $post;
 }
?>