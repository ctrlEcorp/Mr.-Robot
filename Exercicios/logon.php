<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dados Recebidos - RDR2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />


    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(rgba(68, 38, 10, 0.85), rgba(39, 20, 5, 0.85)),
                url('https://imgur.com/IOi5ZC2.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Stardos Stencil', serif;
            color: #d7b77a;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .container-western {
            background: rgba(68, 38, 10, 0.9);
            border: 3px solid #7a4a1a;
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 0 20px 5px rgba(122, 74, 26, 0.7);
            max-width: 500px;
            width: 100%;
            text-align: left;
        }

        h1 {
            color: #b68848;
            text-shadow: 1px 1px 2px #321f07;
            margin-bottom: 2rem;
            font-size: 2.2rem;
        }

        .dado {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid #b68848;
            padding-bottom: 0.5rem;
        }

        .dado:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="bg-wrapper"></div>

    <div class="container-western">
        <h1>📜 Dados Recebidos</h1>
        <?php
        $nome = $_POST['input_nome'];
        $cpf = $_POST['input_cpf'];
        $ecivil = $_POST['inputEstadoCivil'];
        $genero = $_POST['inputGenero'];

        echo "<div class='dado'><strong>Nome:</strong> $nome</div>";
        echo "<div class='dado'><strong>CPF:</strong> $cpf</div>";
        echo "<div class='dado'><strong>Estado Civil:</strong> $ecivil</div>";
        echo "<div class='dado'><strong>Gênero:</strong> $genero</div>";
        ?>
    </div>

</body>

</html>