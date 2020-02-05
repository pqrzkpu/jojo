<?php
require 'config.php';
$con = openCon();

$id=$_REQUEST['id'];

if($id!="ALL")
	$sql = "SELECT * FROM t_group WHERE brg_id='$id'";
else{
    $sql = "SELECT * FROM t_group";
}

$result =exeQuery($con,$sql);

  $array  = array();
  while ($row = readDB($result)) {
    $array[] = $row;
  }
echo json_encode($array);
?>