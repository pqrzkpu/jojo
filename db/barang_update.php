<?php

//    $photo = '';
//    if(!empty($_FILES["file"]["type"])){
//        $fileName = 'file_'.$_FILES['file']['name'];
//        $valid_extensions = array("jpeg", "jpg", "png");
//        $temporary = explode(".", $_FILES["file"]["name"]);
//        $file_extension = end($temporary);
//        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
//            $sourcePath = $_FILES['file']['tmp_name'];
//            $targetPath = "../img/items/".$fileName;
//            if(move_uploaded_file($sourcePath,$targetPath)){
//                $photo = $fileName;
//            }
//        }
//    }
	
    
    $id        = $_POST['id_brg_edit'];
    $hjual     = $_POST['hjual_brg_edit'];
    $hbeli     = $_POST['hbeli_brg_edit'];
    $stok      = $_POST['stok_brg_edit'];


    require 'config.php';
    $con = openCon();

    $sql = "UPDATE t_barang SET brg_harga_jual  = '$hjual',
                                brg_harga_beli  = '$hbeli',
                                brg_stok        = '$stok'
            WHERE brg_id = $id "; 

    $result =exeQuery($con,$sql);



?>


