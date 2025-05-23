<?php 
// function apresentar(){
//     echo 'Hello World';
// }

// apresentar();

########################

// function adicionar($a,$b){
//    return $a + $b;

// }
//    $soma = adicionar(100,50);
//    echo $soma;

############################
// Função Lambda ou Anonima

// $soma = function($a,$b){
//     return $a + $b;

// };

// echo $soma(5,10);

// $nomes = ['Lourdes','Paulo','Marciana','Tiburcio'];

// $nome_maiusculo = array_map(function($n){
//     return strtoupper ($n);},$nomes);

//     print_r( $nome_maiusculo);
###########################

function formatarMoeda($valor){
    return 'R$ '.number_format($valor,2,',','.');
}

function exibirValor($preco,$desconto = 0.1){
      $preco_final = $preco - ($preco*$desconto);
    return "Total com desconto: ".formatarMoeda($preco_final); 
}

echo exibirValor(1250);

?>