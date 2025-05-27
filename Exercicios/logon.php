<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_GET['input_nome'];
    $cpf = $_GET['input_cpf'];
    $ecivil = $_POST['inputEstadoCivil'];
    $genero = $_GET['inputGenero'];
    echo "Nome: $email <br>
    CPF: $cpf<br>
    Estado Civil: $ecivil <br>
    Gênero: $genero <br>";

    ?>
</body>

</html>