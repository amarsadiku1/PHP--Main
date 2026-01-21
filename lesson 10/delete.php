<?php

include_once("config.php");

$id = $_GET['id'];


$sql="DELETE FROM users WHERE id=:id";

$getUsers = $con->perpare($sql);

$getUsers->bindparma(':id',$id);  

$getUsers->execute();

header('Location:dashboard.php');
?>