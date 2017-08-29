<?php


$servername = "db";
$username = "test";
$password = "test";
$db = 'test';

//    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
try {


    $sql = 'CREATE TABLE test';
    $conn->query($sql);
    echo "New table created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

