<?php
require 'db_config.php';

$sql = "SELECT * FROM reporte";

$retornoSQL = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&display=swap" rel="stylesheet">

</head>

<body class="container back-color">

    <div class=" nav-top">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
            <a href="index.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="img/sitelogo.png" class="logo">
            </a>

            <ul class="nav nav-pills barra">
                <li class="nav-item"><a href="index.html" class="nav-link itenbarra">Inicio</a></li>
                <li class="nav-item"><a href="decisao.html" class="nav-link itenbarra">Cadastro</a></li>

            </ul>
        </header>
    </div>

    <div class="container">

        <?php
        while ($dados = mysqli_fetch_array($retornoSQL)) {
        ?>

            <div>
                <p class="text-center"><h3 class="red">Endereço:</h3> <?= $dados['Endereco'] ?></p>
                <p class="text-center"><h3 class="red">Bairro:</h3> <?= $dados['Bairro'] ?></p>
                <p class="text-center"><h3 class="red">Cidade:</h3> <?= $dados['Cidade'] ?></p>
                <p class="text-center"><h3 class="red">Numero de Casos:</h3> <?= $dados['NumCasos'] ?></p>
        </div>

        <?php
        }
        ?>
       
</body>

</html>