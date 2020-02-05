<?php 

header("Access-Control-Allow-Origin: *");
  $host = "localhost";
  $user = "root";
  $pass = ""; 
  $databaseName = "db_nutech";

  $conn_string = "host=localhost port=5432 dbname=sa user=postgres password=26januari options='--client_encoding=UTF8'";
  
//  $_db="POSTGRESQL";
  $_db="MYSQL";
  
function getMasterSetting($_id){
    $con = openCon();
    $sql = "select * from sysmaster where id='$_id'";
    $result=exeQuery($con,$sql);
    $row=readDB($result);
    $val=$row['value'];
    echo $val;
    //return $val;
}


function openCon(){
    if($GLOBALS['_db']=="MYSQL")
        $con = new mysqli($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass'], $GLOBALS['databaseName']);
    else if($GLOBALS['_db']=="SQLSVR"){
        $con = mssql_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['pass']);
               mssql_select_db($GLOBALS['databaseName'], $con);
    }else{
       $con = pg_connect($GLOBALS['conn_string']);
    }
    return $con;
}


function exeQuery($con,$sql){
    if($GLOBALS['_db']=="MYSQL"){
        $result = $con->query($sql);
    }
    else if($GLOBALS['_db']=="SQLSVR"){
        $sql=str_replace("now()","getdate()",$sql);
        $result = mssql_query ($sql, $con);
    }
    else{
        $result = pg_query($sql);
    }
    return $result;
}

function readDB($result){
     if($GLOBALS['_db']=="MYSQL"){
           $row=mysqli_fetch_array($result);
     }
     else if($GLOBALS['_db']=="SQLSVR"){
           $row = mssql_fetch_array($result);
     }else{
           $row = pg_fetch_array($result);
     }
      
    return $row;
}

function getLastId() { 

    $result = mssql_fetch_assoc(mssql_query("select @@IDENTITY as id")); 
    return $result['id'];
 }

?>