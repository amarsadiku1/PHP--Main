<?php


$Host= "localhost";
$user="root";
$pass="";
try{

$conn=new pdo("mysql:host=$host",$user,$pass);
echo "connect";
$sql="Create database testdb";
$con->exec($sql);
echo "Database created  successfully";
echo "Connected";
}catch(exception $e){

echo "not connect";


}



?>