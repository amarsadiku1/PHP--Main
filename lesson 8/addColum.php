<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=testdb",  "root","");

    $sql = "ALTER TABLE products ADD  email VARCHAR(255)";

    $pdo->exec($sql);




echo "colum created successfully!";

}catch (PDOExecpetion $e){  


echo "error creating colum" . $e->getMessage();

}








?>