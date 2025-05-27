<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_GET['input_email'];
    $senha = $_GET['input_senha'];
    echo "Usuario: $email <br>
    Senha: $senha";

    // if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    //     $usuario = $_POST['input_email'];
    //     $senha = $_POST['input_senha'];

    // //     if($usuario=='adm@adm' && $senha=='123'){
    // //         echo "<p style='color:green;'>Login realizado com sucesso
    // //         Bem Vindo $usuario!</p>";
    // //     }
    // //     else{
    // //         echo "<p style='color:red;'>Usuário incorreto!</p>";
    // //     } 
    // }

    ?>
</body>

</html>