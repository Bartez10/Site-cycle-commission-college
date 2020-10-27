<?php
function get_posts () {
  global $connection;
  $sql = "SELECT * FROM teacher";
  $result = mysqli_query($connection, $sql);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $posts;
}
 function get_post_by_id ($post_id){
   global $connection;
   $sql = "SELECT * FROM teacher WHERE id_teacher = ".$post_id;
   $result = mysqli_query ($connection, $sql);
   $post=mysqli_fetch_assoc($result);
   return $post;
 }
?>