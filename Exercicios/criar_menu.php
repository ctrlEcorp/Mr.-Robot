<?php 
//  echo "Escolha uma opção:
// 1: SAUDAÇÕES
// 2: MOSTRAR DATA ATUAL
// 3: SAIR
// ";

while (true) {
     echo "\nEscolha uma opção:
1: SAUDAÇÕES
2: MOSTRAR DATA ATUAL
3: SAIR
";
    $Escolha_a_Opção = readline();
    if ($Escolha_a_Opção == "1") {
        $nome = readline ("Qual o seu nome?");
        echo "Bem Vindo: $nome \n";
        
    }
    elseif ($Escolha_a_Opção == "2") {
       echo "Hoje é dia 21/05/2025! \n";
       
    }
    else {
        echo "Saindo do Programa! \n";
        break;
    }

} 

// $Escolha_a_Opção = readline("Escolha uma opção:
// 1: SAUDAÇÕES
// 2: MOSTRAR DATA ATUAL
// 3: SAIR");

//  $$Escolha_a_Opção = match ($letra) {
//       '1: SAUDAÇÔES' => 'É uma vogal!',
//       '2: MOSTRAR DATA ATUAL' => 'Hoje é dia: 21/05/2025',
//      default => 'Saindo do Programa!'
// };
// echo $Escolha_a_Opção;

?>