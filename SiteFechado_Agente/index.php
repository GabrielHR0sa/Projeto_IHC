<?php

// Iniciando a sessão e incluindo o arquivo com infos do BD 
session_start();
include_once("./db_config.php")

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Foco na Dengue - Login</title>
  
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-3.6.1.min.js"></script>

  <!-- Favicon do site -->
  <link rel="icon" type="image/x-icon" href="imagem/logo.png">
</head>

<body class="perfil">
  <main>

    <img class="imgIndex" src="imagem/logo.png">

    <div class="contIndex">

      <div class="formulario">

        <div class="marginBottom">
          <a href="#" class="d-flex align-items-center ">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="icone contentCenter" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
          </a>
        </div>


        <div>
          <form class="form-signin container" method="POST" action="./login.php">
            <label for="inputCPF" class="sr-only">CPF</label>
            <input type="number" id="inputCPF" name="inputCPF" class="marginTop" placeholder="CPF (Somente números)" required="" autofocus="">
            <br>
            <label for="inputData" class="sr-only">Data Aniversário</label>
            <input type="text" id="inputData" name="inputData" class="marginTop" placeholder="Escolha sua data de nascimento"  onfocus="(this.type='date')" required="" autofocus="">
            <br>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" name="inputPassword" class="marginTop" placeholder="Digite sua Senha" required="">
            <div class="bloco1">
              <button type="submit" value="entrar" id="entrar" name="entrar" class="bton">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg> 
                ENTRAR
              </button>
            </div>
            <br>
            <p class="textos">Em caso de dúvidas, por favor <a href="#" class="textos"><strong>clicar aqui</strong></a></p>
          </form>
        </div>

      </div>
    </div>
  </main>
</body>
</html>