<?php
require 'config.php';
$con = openCon();

$id = $_REQUEST['id'];

$sql 	= "DELETE FROM t_barang WHERE brg_id = $id";
$result = exeQuery($con,$sql);

  
echo json_encode($array);
?>