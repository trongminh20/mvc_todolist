<?php
$dbInfo = 'mysql:host=localhost;dbname=toDoListDB';
$username='root';
$pass= 'trongminh';
try {
    $db = new PDO($dbInfo, $username, $pass);
}catch (PDOException $e){
    $err_msg = $e->getMessage();
    include('./dberror.php');
    exit();
}