<?php 
$idade = is_numeric(readline("Digite sua idade: "));

$result = $idade <= 18? "é maior de idade":"É menor de idade";

echo $result;

?>