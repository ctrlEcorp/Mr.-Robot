<h1 class="text-center my-4">Cadastrado de Aluno</h1>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required>
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF" maxlength="11" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label"></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" value="Masculino" required>
                <label class="form-check-label" for="masculino">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genero" value="Feminino" required>
                <label class="form-check-label" for="feminino">Feminino</label>
            </div>
        </div>
        <div class="col-md-4">
            <label for="escolaridade" class="form-label">Escolaridade</label>
            <select name="escolaridade" class="form-select" required>
                <option value="">Selecione</option>
                <option>Fundamental Incompleto</option>
                <option>Fundamental Completo</option>
                <option>Ensino Médio Incompleto</option>
                <option>Ensino Médio Completo</option>
                <option>Cursando Superior</option>
                <option>Superior Completo</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label"></label>
        <textarea name="observacao" class="form-control" rows="3" placeholder="Observações"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>