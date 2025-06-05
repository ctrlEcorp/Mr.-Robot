<?php
switch ($_REQUEST['acao']){
    case 'cadastrar':
        $sql = "INSERT INTO usuario(nome,email,senha,data_nascimento) VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$_POST['data_nascimento']}')";

        $result = $conn->query($sql);
        break;

    case 'editar':
        ##################
        break;
}
