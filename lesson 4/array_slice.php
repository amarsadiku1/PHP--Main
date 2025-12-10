<?php




$sports=['Football','basketball', 'handball', 'voleyball', 'Golf'];

$outiput1= array_slice($sports, 2 );
$outiput2= array_slice($sports, -2, 1  );
$outiput3= array_slice($sports, 0,3);

var_dump($outiput1, $outiput2, $outiput3  );















?>