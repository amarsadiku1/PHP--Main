<?php

function  callCounter(){

static $conut=0;
$conut++;
echo  "the value of count varible is  : $conut <br>";

}
callCounter();
callCounter();
callCounter();



?>