<?php


$x=6;
$y=7;

function    sum(){
global $x,$y;
$y=$x+$y;


} 
sum();
echo $y;

?>