<?php

$servername = "localhost";
$username = "root";
$password = "@UCccs2026";

try{
    $db = new PDO("mysql:host=$servername;dbname=users", $username, $password);
    echo "Connected successfully";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>
