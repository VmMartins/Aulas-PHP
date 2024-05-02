<?php


//Logicos=> e = (&&), ou = (||), não = (!).//

$res = (5 == 5) || (10 == 20);
$res1 =((10 <= 5) || (10 == 20)) && (5==5);
$res2 = !$res;

var_dump($res);
var_dump($res1);
var_dump($res2);
?>