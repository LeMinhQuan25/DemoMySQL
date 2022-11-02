<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "demo_db2";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");
    }
    else
    {
        echo "Kết nối thất bại!".mysqli_connect_error();
    }
?>

