<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO usuarios(nome, cpf, data_nascimento, genero, escolaridade, observacao) 
                VALUES (
                    '{$_POST['nome']}',
                    '{$_POST['cpf']}',
                    '{$_POST['data_nascimento']}',
                    '{$_POST['genero']}',
                    '{$_POST['escolaridade']}',
                    '{$_POST['observacao']}'
                )";

        $result = $conn->query($sql);

        if ($result === true) {
            print("<script>alert('Cadastrado com Sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Não foi possível cadastrar!')</script>");
        }
        break;

    case 'editar':
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];
        $escolaridade = $_POST['escolaridade'];
        $observacao = $_POST['observacao'];

        $sql = "UPDATE usuarios SET 
                    nome = '{$nome}',
                    cpf = '{$cpf}',
                    data_nascimento = '{$data_nascimento}',
                    genero = '{$genero}',
                    escolaridade = '{$escolaridade}',
                    observacao = '{$observacao}'
                WHERE id_usuario = {$_REQUEST['id']}";

        $result = $conn->query($sql);

        if ($result === true) {
            print("<script>alert('Editado com Sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Não foi possível editar!')</script>");
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id_usuario = " . $_REQUEST['id'];

        $result = $conn->query($sql);

        if ($result === true) {
            print("<script>alert('Excluído com Sucesso!')</script>");
            print("<script>location.href='?page=listar'</script>");
        } else {
            print("<script>alert('Não foi possível excluir!')</script>");
        }
        break;
}
?>
