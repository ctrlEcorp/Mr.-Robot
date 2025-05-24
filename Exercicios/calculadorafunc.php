<?php
function soma($a, $b)
{
  return $a + $b;
}
function subtracao($a, $b)
{
  return $a - $b;
}
function multiplicacao($a, $b)
{
  return $a * $b;
}
function divisao($a, $b)
{
  if ($a == 0 or $b == 0) {
    echo "Erro: Divisão por zero!\n";
  } else {
    return $a / $b;
  }
}
while (true) {
  echo "\n1:soma\n2:subtração\n3:multiplicação:\n4:divisão:\n5:Sair\n";
  $operacao = readline("Selecione a opção desejada: ");
  if ($operacao == 5) {
    echo "Saindo do Programa...";
    break;
  }
  $primeiro_numero = readline("Digite o primeiro número:");
  $segundo_número = readline("Digite o segundo número desejado:");


  if ($operacao == 1) {
    $result = soma($primeiro_numero, $segundo_número);
    echo $result;
  } elseif ($operacao == 2) {
    $result = subtracao($primeiro_numero, $segundo_número);
    echo $result;
  } elseif ($operacao == 3) {
    $result = multiplicacao($primeiro_numero, $segundo_número);
    echo $result;
  } elseif ($operacao == 4) {
    $result = divisao($primeiro_numero, $segundo_número);
    echo $result;
  } else "Opção inválida";
}
