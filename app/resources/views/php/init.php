<?php

session_start();
$_SESSION['user_id']=1;
try {
    $db =new PDO('mysql:dbname=todo;host=localhost',root);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}
?>
























