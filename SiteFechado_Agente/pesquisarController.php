<?php
    include('db_config.php');

    $Bairro     =       isset($_POST['Bairro']) ? $_POST['Bairro']  : null;
    $Rua        =       isset($_POST['Rua'])    ? $_POST['Rua']     : null;
    $acao       =       isset($_POST['acao'])   ? $_POST['acao']    : '';

    if ($acao == "PESQUISAR") {
        if ($Bairro == "Selecione um BAIRRO" || $Rua == "Selecione uma RUA") {
            if ($Bairro == "Selecione um BAIRRO") {
                echo"<script language='javascript' type='text/javascript'>
                alert('Infelizmente você esqueceu de colocar o BAIRRO do reporte! Preencha ambos os campos');
                window.location.href='./pesquisar.php';</script>";
            }
            else if ($Rua == "Selecione uma RUA") {
                echo"<script language='javascript' type='text/javascript'>
                alert('Infelizmente você esqueceu de colocar a RUA do reporte! Preencha ambos os campos');
                window.location.href='./pesquisar.php';</script>";
            }
        }
        else {
            $sql = "SELECT * FROM dados_reporte WHERE Bairro = '$Bairro' AND Rua = '$Rua'";

            $retornoSQL = mysqli_query($conexao, $sql);
            $num_reportes = mysqli_num_rows($retornoSQL);

            echo ("<script language='javascript' type='text/javascript'>
            alert('Bairro: " . $Bairro . " - Rua: " . $Rua . " --> Número de casos: " . $num_reportes . " (Clique em OK para voltar!)');
            window.location.href='./pesquisar.php';</script>");
        }
    }
?>