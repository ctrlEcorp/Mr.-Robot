<?php 

// $valores = [1,2,3,4,5,6,7,8,9,10];
// for ($i = 0; $i < $total_valores = count($valores); $i++){
//     echo $valores [$i]. '<br>' ;
// }

$n = readline ("Digite o numero: ");
$numeros = range(1,$n);
$soma = 0;
foreach ($numeros as $numero){ 
    echo " + $numero";
$soma += $numero;
}
echo "   O resultado é: $soma";

// $n = readline ("Digite o numero");
 

?>