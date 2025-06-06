<h1 class="mt-02">Listar Usuarios</h1>

<?php

$sql = "SELECT * FROM usuario";

$result = $conn->query($sql);

$qtd = $result->num_rows; // Todos os registros das colunas serão mostrados em uma linha 

if ($qtd > 0) {
    print '<table class="table">
        <thead class= "text-center">
        <tr>
            <th scope = "col"> ID </th>
            <th scope = "col"> Nome </th>
            <th scope = "col"> E-mail </th>
            <th scope = "col"> Senha </th>
            <th scope = "col"> Data de Nascimento </th>
            <th scope = "col"> Ações </th>
            </tr>
            </thead>';

            while($row = $result->fetch_object()){
                print"<tr class = 'text-center'>";
                print"<td>".$row->id_usuario."</td>";
                print"<td>".$row->nome."</td>";
                print"<td>".$row->email."</td>";
                print"<td>".$row->senha."</td>";
                print"<td>".date("d/m/Y", strtotime($row->data_nascimento))."</td>";
                
                print("<td> <button onclick=\"location.href='?page=editar&id = ".$row->id_usuario."';\"class='btn btn-success me-3'>Editar</button>");

                // print();
            };

            
}


?>