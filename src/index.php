<?php

echo "Witam, działam.";

//phpinfo();
$conn = new PDO(
    'mysql:host=db;dbname=test',
    'test',
    'test'
);

$sql = 'CREATE TABLE dockertesting';

if ($conn->query($sql) == TRUE){
    echo "It's working nice";
}else {
    echo "Its not working";
}