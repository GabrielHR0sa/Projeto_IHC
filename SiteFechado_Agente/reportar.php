<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar/Cadastrar</title>
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-3.6.1.min.js"></script>

</head>

<body class="contPerfil">

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 barraPerfil">
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="perfil.html" class="nav-link itemB"><svg xmlns="http://www.w3.org/2000/svg"
            width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
          </svg> Voltar</a></li>
    </ul>
  </header>

  <main>

    <div class="formulario">
      <div>
        <form method="POST" action="reportController.php" class="form-signin container">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
            class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
            <path
              d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
            <path
              d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
          </svg>
          <h1 class="textos"><strong>Reportar Foco</strong></h1><br>
          <h2 class="textos">Dados - Endereço</h2><br>

          <label for="Endereco" class="sr-only">Endereço</label>
          <input type="text" name="Endereco" id="Endereco" class="marginTop" placeholder="Endereço" required="" autofocus="">
          <br>
          <label for="Bairro" class="sr-only">Bairro</label>
          <input type="text" name="Bairro" id="Bairro" class="marginTop" placeholder="Bairro" required="" autofocus="">
          <br>
          <label for="Cidade" class="sr-only">Cidade</label>
          <input type="text" name="Cidade" id="Cidade" class="marginTop" placeholder="Cidade" required="" autofocus="">
          <br>
          <label for="NumCasos" class="sr-only">Quantidade de Casos</label>
          <input type="number" name="NumCasos" id="NumCasos" class="marginTop" placeholder="Quantidade de Casos" required="">
          <br><br>
          <div class="bloco1">
            <!--<a href="#" class="bton">Salvar</a>-->
            <input type="submit" name="acao" value="SALVAR" class="bton">
          </div>
        </form>
      </div>

      <p class="textos">Em caso de dúvidas, por favor <a href="#" class="textos"><strong>clicar aqui</strong></a></p>

    </div>

  </main>

</body>

</html>