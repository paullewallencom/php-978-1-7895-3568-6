<?php 

$host = "localhost"; 

$username = "root"; 

$password = "root"; 

$database = "packt_database"; 

try { 

    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password); 

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

  $sql = "UPDATE users SET email = :email WHERE id = :id"; 

  $statement = $conn->prepare($sql); 

  //the value currently in the database is john@email.com

  $statement->execute(['email' => 'jsmith@email.com', 'id' => 1]); 

  echo $statement->rowCount() . "(s) rows affected."; 
    } 

catch(PDOException $e) 
    { 
    echo "Connection failed: " . $e->getMessage();    
    } 

?> 

