<?php
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $_REQUEST['ID'];

$result = $conn->query($sql);

$row = $result->fetch_object();

?>




<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <!-- input:hidden Input oculto para enviar a acao para a listagem -->

    <input type="hidden" name="id">

    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de nascimento</label>
        <input type="date" name="data_nascimento" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>