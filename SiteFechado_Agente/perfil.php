<?php

// Iniciando a sessão e incluindo o arquivo com infos do BD 
session_start();
include_once("./db_config.php");

$CPFUser = $_COOKIE['user'];

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Foco na Dengue - Perfil</title>
  
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-3.6.1.min.js"></script>

  <!-- Favicon do site -->
  <link rel="icon" type="image/x-icon" href="imagem/logo.png">

  <script>
    function exibirContato() {
      var telefone = "123456789";
      var email = "exemplo@example.com";
      var mensagem = "Telefone: " + telefone + "\nE-mail: " + email;
      alert(mensagem);
    }
  </script>
</head>

<body class="contPerfil">

  <main>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 barraPerfil">
      <a href="index.html" class="d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
          class="bi bi-person-circle iconeB" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
      </a>

      <a class="textosB marginESQ">Olá,<?php echo($CPFUser) ?></a>
    </header>

    <div class="funcPerfil">
      <div class="d-grid gap-2">

        <a href="reportar.php" class="funcPerfil backPerfil col-12 textosB">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path
              d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
            <path
              d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
          </svg> Reportar Foco</a>

        <a href="pesquisar.php" class="funcPerfil backPerfil textosB">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>Pesquisar Focos</a>
      </div>
    </div>

    <p class="textos">Em caso de problemas, por favor <a href="#" class="textos" onclick="exibirContato()"><strong>clique aqui</strong></a></p>

  </main>

</body>

</html>