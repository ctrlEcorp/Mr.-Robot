<h1 class="mt-02">Listar Aluno</h1>

<?php

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

$qtd = $result->num_rows; // Todos os registros das colunas serão mostrados em uma linha 

if ($qtd > 0) {
    print '<table class="table">
        <thead class= "text-center">
        <tr>
            <th scope = "col"> ID </th>
            <th scope = "col"> Nome </th>
            <th scope = "col"> CPF </th>
            <th scope = "col"> Data de Nascimento </th>
            <th scope = "col"> Genero </th>
            <th scope = "col"> Escolaridade </th>
            <th scope = "col"> Observação </th>
            <th scope = "col"> Ações </th>
            </tr>
            </thead>';

    while ($row = $result->fetch_object()) {
        print "<tr class = 'text-center'>";
        print "<td>" . $row->id_usuario . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->cpf . "</td>";
        print "<td>" . date("d/m/Y", strtotime($row->data_nascimento)) . "</td>";
        print "<td>" . $row->genero . "</td>";
        print "<td>" . $row->escolaridade . "</td>";
        print "<td>" . $row->observacao . "</td>";

        print("<td> <button onclick=\"location.href='?page=editar&id=" . $row->id_usuario . "';\"class='btn btn-success me-3'>Editar</button>");
    };
}


?>