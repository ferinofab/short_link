<?php
$db_host = "MySQL-8.2";
$pass = "";
$db_name = "docker";
$db_user = "root";

$conn = mysqli_connect($db_host, $db_user, $pass, $db_name);
if(!$conn){
    die("error". mysqli_connect_error());
}else{
    return $conn;
}