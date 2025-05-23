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
        date_default_timezone_set('America/Campo_Grande');
       echo "Hoje é dia".date('d/m/Y H:i');
    }

    else if ($Escolha_a_Opção == "3"){
        echo "Saindo do Programa! \n";
        break;
    }
    
    else {
        echo "\n Opção Invalida, Tente Novamente";
    }
}

// while (true) {
//      echo "\nEscolha uma opção:
// 1: SAUDAÇÕES
// 2: MOSTRAR DATA ATUAL
// 3: SAIR
// ";
//     $Escolha_a_Opção = readline();
//     if ($Escolha_a_Opção == "1") {
//         $nome = readline ("Qual o seu nome?");
//         echo "Bem Vindo: $nome \n";
        
//     }
//     elseif ($Escolha_a_Opção == "2") {
//        date_default_timezone_set('America/Campo_Grande');
//        $datahoje = new DateTime();
//        echo $datahoje->format('d/m/Y H:i:s');
//     }
//     else {
//         echo "Saindo do Programa! \n";
//         break;
//     }
// } 
?>