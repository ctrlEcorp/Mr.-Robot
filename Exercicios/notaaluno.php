<?php 
$nota1 = readline ("Digite a primeira nota: ");
$nota2 = readline ("Digite a segunda nota: ");
$nota3 = readline ("Digite a terceira nota: ");
$nota4 = readline ("Digite a quarta nota: ");
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo $resultado = match (true) {
    $media >=10 =>'Aprovado com distinção',
    $media >=6 && $media >8 => 'Aprovado',
    $media >=4 && $media >6 => 'Recuperação',
    $media <4 => 'Reprovado',
    default => "Nota errada"
};

?>
