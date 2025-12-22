<?php

try{
    $pdo = new pdo("mysql:host=localhost;dbname=db", "root","");

$username = "Amar";

$password = password_hash("mypasword", PASSWORD_DEFAULT);

$sql = "INSERT INTO USERS (username, password) VALUES ('$username',  '$password')";

$pdo->exec($sql);

echo"created successfully";
}catch (Exception $e){

echo $e->getMessage();

}

?>