<?php

   try{

   $pdo = new PDO("mysql:host=localhost;dbname=testdb",  "root", "");    
   
   $sql = "DROP TABLE products";


   $pdo->exec($sql);

    echo "Table dropped successfully!";

   }catch (PDOExecpetion $e){

      echo $e->getMessage();

   } 


?>