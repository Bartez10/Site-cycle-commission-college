<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM vypusk ORDER BY id_vypusk DESC";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
 function get_post_by_id ($post_id){
   global $connection;
   $sql = "SELECT * FROM vypusk WHERE id_vypusk = ".$post_id;
   $result = mysqli_query ($connection, $sql);
   $post=mysqli_fetch_assoc($result);
   return $post;
 }
?>