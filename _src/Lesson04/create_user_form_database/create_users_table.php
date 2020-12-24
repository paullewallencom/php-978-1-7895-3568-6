<?php
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "packt_database";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = $conn->prepare("CREATE TABLE users (
                id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname varchar(30) NOT NULL,
                lastname varchar(30) NOT NULL,
                email varchar(30) NOT NULL
        )");

        $sql->execute();

    }
    catch(PDOException $e)
    {
       echo "Connection failed: " . $e->getMessage();
    }
?>