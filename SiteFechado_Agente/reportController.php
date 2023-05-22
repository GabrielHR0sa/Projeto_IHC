
<?php
    include('db_config.php');

    $Bairro     =       isset($_POST['Bairro']) ? $_POST['Bairro']  : null;
    $Rua        =       isset($_POST['Rua'])    ? $_POST['Rua']     : null;
    $acao       =       isset($_POST['acao'])   ? $_POST['acao']    : '';
    $CPFUser = $_COOKIE['user'];

    if ($acao == "SALVAR") {
        if ($Bairro == "Selecione um BAIRRO" || $Rua == "Selecione uma RUA") {
            if ($Bairro == "Selecione um BAIRRO") {
                echo"<script language='javascript' type='text/javascript'>
                alert('Infelizmente você esqueceu de colocar o BAIRRO do reporte! Preencha ambos os campos');
                window.location.href='./reportar.php';</script>";
            }
            else if ($Rua == "Selecione uma RUA") {
                echo"<script language='javascript' type='text/javascript'>
                alert('Infelizmente você esqueceu de colocar a RUA do reporte! Preencha ambos os campos');
                window.location.href='./reportar.php';</script>";
            }
        }
        else {
            $sql = "INSERT INTO dados_reporte (CPF_reporte, Bairro, Rua) values ('$CPFUser','$Bairro', '$Rua')";

            $retornoSQL = mysqli_query($conexao, $sql);
    
            if ($retornoSQL == TRUE) {
                echo"<script language='javascript' type='text/javascript'>
                alert('Foco registrado com SUCESSO!');
                window.location.href='./perfil.php';</script>";
            } else {
                echo"<script language='javascript' type='text/javascript'>
                alert('Ocorreu um ERRO, não conseguimos salvar seu reporte!');
                window.location.href='./perfil.php';</script>";
            }
        }
    }
?>