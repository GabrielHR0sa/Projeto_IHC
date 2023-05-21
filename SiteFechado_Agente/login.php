<?php

session_start();
include_once("db_config.php");

$inputCPF           =       filter_input(INPUT_POST, 'inputCPF',        FILTER_SANITIZE_NUMBER_INT);
$inputData          =       filter_input(INPUT_POST, 'inputData');
$inputPassword      =       filter_input(INPUT_POST, 'inputPassword',   FILTER_SANITIZE_STRING);
$entrar             =       $_POST['entrar'];

/*
echo($inputCPF);
echo("--");
echo($inputPassword);
echo("--");
echo($inputData);
*/

// Verifica se as informações estão corretas e loga na conta da pessoa ou apresenta erro
if (isset($entrar)) {
    $verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE CPF = ('$inputCPF') AND Data_aniversario = ('$inputData') AND Senha = ('$inputPassword')");
      if (mysqli_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>
        alert('CPF, Data de aniversário e/ou senha incorretos');window.location
        .href='./index.php';</script>";
        die();
      } else { 
        echo"<script language='javascript' type='text/javascript'>
        alert('Sucesso, você logou em uma conta!');window.location
        .href='./perfil.php';</script>";

        $cookie_name = "user";
        $cookie_value = $inputCPF;
        $cookieUser = setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      }
  }
?>