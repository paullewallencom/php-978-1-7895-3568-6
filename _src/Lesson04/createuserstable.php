<?php 

$host = "localhost"; 

$username = "root"; 

$password = ""; 

$database = "packt_database"; 

try { 

    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    $sql = "CREATE TABLE users ( 

    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 

    firstname VARCHAR(30) NOT NULL,

    lastname   VARCHAR(30) NOT NULL,

    email VARCHAR(30) NOT NULL

    )"; 

    $conn->exec($sql); 
    echo "User table created!";

    } 

catch(PDOException $e) 
    { 
    echo "Connection failed: " . $e->getMessage(); 
    } 
?> 