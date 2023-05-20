<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReportController</title>
</head>

<body>

    <?php
    include('db_config.php');

    $Endereco = isset($_POST['Endereco']) ? $_POST['Endereco'] : null;
    $Bairro = isset($_POST['Bairro']) ? $_POST['Bairro'] : null;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : '';

    if ($acao == "SALVAR") {

        $sql = "INSERT INTO dados_endereco (Endereco, Bairro) values ('$Endereco', '$Bairro')";

        $retornoSQL = mysqli_query($conexao, $sql);

        if ($retornoSQL == TRUE) {
            header("Location: index.html");
        } else {
            header("Location: index.html?erro=SALVAR");
        }
    } 
    

    ?>
</body>

</html>