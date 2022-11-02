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
    // $conn = mysqli_connect(hostname:"127.0.0.1", username:"root", password:"abc12345678");
    // if(!$conn){
    //     die("Loi".mysqli_connect_error());
    // }
    // mysqli_query($conn,'demo_db2');
?>
