<?php 
$letra = readline ( "Digite uma letra: ");

 $result = match ($letra) {
      'a','A','e','E','i','I','o','O','u','U' => 'É uma vogal!',
     default => 'É uma consoante'
};
echo $result;
?>