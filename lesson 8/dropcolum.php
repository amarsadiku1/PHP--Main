<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=testdb",  "root", "");

    $sql= "ALTER TABLE products DROP COLUMN email";

    $pdo->exec($sql);


echo "Colum dropped  successfully!";

}catch (PDOExecpetion $e) {

echo  $e-> getMessage();



}






?>