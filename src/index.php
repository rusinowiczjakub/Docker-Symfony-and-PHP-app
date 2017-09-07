<?php


$servername = "db";
$username = "test";
$password = "test";
$db = 'test';


$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

if($conn == true){
    $query = "SHOW VARIABLES WHERE Variable_name = 'hostname'";

}