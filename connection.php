<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "info";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("connect failed".$conn->connect_error);
    }
    echo "";
?>