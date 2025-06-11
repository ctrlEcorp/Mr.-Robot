<?php
$sql = "SELECT * FROM usuario WHERE id_usuario =".$_REQUEST['id'];
 
$result=$conn->query($sql);
 
$row=$result->fetch_object();
 
?>
 
<h1>Editar Usuario</h1>
 
<form action="?page=salvar" method="post">
 
    <!-- Input oculto para enviar a ação para a listagem -->
    <input type="hidden" name="acao" value="editar">
 
    <input type="hidden" name="id" value="<?php print($row->id_usuario)?>">
 
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $row->nome?>">
    </div>
 
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
    </div>
 
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" value="<?= $row->senha?>">
    </div>
 
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control" value="<?= $row->data_nascimento ?>">
    </div>
 
    <button type="submit" class="btn btn-primary">Enviar</button>
 
</form>
