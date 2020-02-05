<?php

    $photo = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = 'file_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "../img/items/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $photo = $fileName;
            }
        }
    }
	
    
    $nama      = $_POST['nama_brg'];
    $hjual     = $_POST['hjual_brg'];
    $hbeli     = $_POST['hbeli_brg'];
    $stok      = $_POST['stok_brg'];
    $group     = $_POST['group_brg'];


    require 'config.php';
    $con = openCon();

    $sql = "INSERT INTO t_barang (brg_nama, brg_harga_jual, brg_harga_beli, brg_stok, brg_group, brg_photo)
                VALUES ('$nama', $hjual, $hbeli, $stok, $group,'$photo')"; 

    $result =exeQuery($con,$sql);


    $sqly ="UPDATE t_group SET group_counter =  group_counter + 1  WHERE group_id = '$group' ";
    $result =exeQuery($con,$sqly);

?>


