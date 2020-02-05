<?php
require 'config.php';
$con = openCon();

$id=$_REQUEST['id'];

$sql = "SELECT (group_counter + 1) AS group_counter  FROM t_group WHERE group_id = '$id'";
$result =exeQuery($con,$sql);

$array  = array();
  while ($row = readDB($result)) {
    $array[] = $row;
  }
echo json_encode($array);

?>