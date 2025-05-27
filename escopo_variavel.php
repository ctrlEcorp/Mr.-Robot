<?php

$num1 = 15;

function exemplo($num2){
    global $num1; //global usado para chamar variavel fora do escopo ou seja fora das {}
    $result = $num1 + $num2;
    return $result;
}

echo exemplo(3);
