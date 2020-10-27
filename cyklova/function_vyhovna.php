<?php
function get_vuhov () {
  global $connection;
  $sql = "SELECT * FROM vyhovnaCK ORDER BY id_vyhovna DESC";
  $result = mysqli_query($connection, $sql);
  $vuhov = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $vuhov;
}
?>