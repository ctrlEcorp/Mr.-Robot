<?php

class Aluno {
   
    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;

  
    public function __construct($nome, $nota1, $nota2, $nota3, $nota4) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }

   
    public function calcularMedia() {
        $media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
        return $media;
    }

   
    public function verificarAprovacao() {
        $media = $this->calcularMedia();

        if ($media < 4) {
            return "Reprovado";
        } elseif ($media >= 4 && $media < 6) {
            return "Recuperação";
        } elseif ($media >= 6 && $media <= 9) {
            return "Aprovado";
        } else { // acima de 9
            return "Aprovado com distinção";
        }
    }

  
    public function exibirResultado() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Média: " . number_format($this->calcularMedia(), 2, ',', '.') . "<br>";
        echo "Situação: " . $this->verificarAprovacao() . "<br>";
    }
}

$aluno = new Aluno("João", 8.5, 9.0, 7.5, 10.0);
$aluno->exibirResultado();

?>
