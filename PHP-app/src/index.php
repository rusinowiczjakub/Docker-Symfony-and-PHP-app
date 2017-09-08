<?php


$servername = "database_php";
$username = "test";
$password = "test";
$db = 'test';


$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

if($conn == true){
    echo "<h1 style='text-align: center'>" . "Hello my friend. If you see me, that everything went good. You can creating your project in /src directory" . "</h1>";
}