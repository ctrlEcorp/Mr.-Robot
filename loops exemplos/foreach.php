<?php 
// $vetor = [1,2,3,4,5];
// foreach ($vetor as $item){
//     echo $item.'<br>';
// }
// $anos = range(1980,2005);
// echo "<ul>";
// foreach ($anos as $ano){
//     echo "<li>$ano<li>";
// }
// echo "</ul>";

//array_marge = junta duas arrays
$caracter = array_merge(range('A','Z'),range(0,9));
shuffle($caracter); // Shuffle = Embaralha os elementos do Array

$senha = implode('',array_slice($caracter,0,8));

echo "Senha gerada:" 

?>