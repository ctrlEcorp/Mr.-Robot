<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</body>

 </html>  -->

<!-- <!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</head>

<body class="d-flex align-items-center justify-content-center py-4 bg-light vh-100">

    <div>

  <!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Recebidos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  Fonte estilo faroeste -->

<link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet">

<style>
    body {
        background: linear-gradient(to bottom, #2b1d17, #0f0f0f);
        font-family: 'Stardos Stencil', serif;
        color: #f5deb3;
        height: 100vh;
        margin: 0;
    }

    .container-western {
        background: #1a120d;
        border: 5px solid #8b0000;
        padding: 2rem 3rem;
        border-radius: 15px;
        box-shadow: 0 0 30px #300000;
        color: #f5deb3;
        max-width: 600px;
        text-align: center;
    }

    h1 {
        font-size: 2.5rem;
        margin-bottom: 2rem;
        color: #d4af37;
        text-shadow: 2px 2px 0 #000;
    }

    .dado {
        font-size: 1.3rem;
        margin-bottom: 1rem;
        border-bottom: 1px solid #8b0000;
        padding-bottom: 0.5rem;
    }

    .dado:last-child {
        border-bottom: none;
    }

    .bg-wrapper {
        background-image: url('https://imgur.com/IOi5ZC2.jpg');
        background-size: cover;
        background-position: center;
        filter: brightness(0.4);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
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