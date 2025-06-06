<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO usuario(nome,email,senha,data_nascimento) VALUES ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$_POST['data_nascimento']}')";

        $result = $conn->query($sql);
        break;

        if ($result == true) {
            print("<script>alert('Cadastrado com Sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Não foi possivel cadastrar!')</script>");
        }
        break;

    case 'editar':
        $nome = $_POST['name']; //Estamos recebendo as informções do Formulario 'editar'
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST['data_nascimento'];

        $sql = "UPDATE usuario SET 
        nome = '{$nome}',
        email = '{$email}',
        senha = '{$senha}',
        data_nascimento = '{$data_nascimento}'
        WHERE id_usuario =".$_REQUEST['id'];

        $result = $conn->query($sql);
        break;
}
