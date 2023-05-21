<?php

$enderecoServidor = '127.0.0.1';
$nomeBanco = 'focoNaDengue';
$porta = '3306';
$usuario = 'root';
$senha = '123456789root';

$conexao = mysqli_connect($enderecoServidor, $usuario, $senha, $nomeBanco,  $porta);

if(!$conexao){
    die('<h1>Erro ao conectar com o Banco de Dados!!!</h1>');
}

</php>