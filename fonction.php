<?php

function moncalcul($num1,$num2,$op){

switch ($op){
    case "add":
        $cal= $num1+ $num2;
        break;
    case "sub":
        $cal=$num1-$num2;
        break;
    case "mul":
            $cal=$num1*$num2;
            break;
    default: 
            $cal="une eurrere";
}
return $cal;
}

$num1= $_GET["num1"];
$num2= $_GET["num2"];
$op= $_GET["op"];
echo "Le resultat est :".moncalcul($num1,$num2,$op);
