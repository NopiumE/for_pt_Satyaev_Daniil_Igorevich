<?php

$servername = "10.10.0.2";
$username = "root";
$password = "1";
$dbName = "first";

$link = mysqli_connect($servername,$username, $password);

if (!$link){
    die("Error connection " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (!mysqli_query($link,$sql)){
    echo "Can't create DB";
}

mysqli_close($link);

$link = mysqli_connect($servername,$username,$password,$dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(50) NOT NULL
)";

if (!mysqli_query($link,$sql)){
    echo "Can't create table Users";
}

$sql = "CREATE TABLE IF NOT EXISTS posts(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(20) NOT NULL,
    main_text VARCHAR(400) NOT NULL,
    image_name VARCHAR(50) NOT NULL
)";

if(!mysqli_query($link,$sql)){
    echo "Can't create table  posts";
}

mysqli_close($link);
?>
