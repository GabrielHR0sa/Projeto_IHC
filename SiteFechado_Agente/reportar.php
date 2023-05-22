<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Foco na Dengue - Reportar foco</title>
  
  <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Favicon do site -->
  <link rel="icon" type="image/x-icon" href="imagem/logo.png">

  <script>
      $(document).ready(function() {
          // Mapeando os dados para o filtro
          var dadosFiltroBairroParaRua = {
              "Selecione um BAIRRO"   :   ["Selecione uma RUA","Rua Campos Sales", "Rua Treze de Maio", "Rua Marechal Deodoro","Rua Benedito Galdino", "Rua Osmar Mantovani", "Rua Rodolfo Silvestre", "Rua Adival Bertoli", "Rua Dr. Rafael Lofrano", "Rua Augusto Troiano"],
              "Centro"                :   ["Selecione uma RUA","Rua Campos Sales", "Rua Treze de Maio", "Rua Marechal Deodoro"],
              "Jardim Santo Antônio"  :   ["Selecione uma RUA", "Rua Benedito Galdino", "Rua Osmar Mantovani", "Rua Rodolfo Silvestre"],
              "Jardim Paraiso I"      :   ["Selecione uma RUA","Rua Adival Bertoli", "Rua Dr. Rafael Lofrano", "Rua Augusto Troiano"]
          };

          // Manipulador do evento change do primeiro select
          $("#Bairro").change(function() {
              var selecionado = $(this).val();

              // Limpa o segundo select
              $("#Rua").empty();

              // Verifica se há dados para o valor selecionado no primeiro select
              if (dadosFiltroBairroParaRua.hasOwnProperty(selecionado)) {
                  var opcoes = dadosFiltroBairroParaRua[selecionado];
                  // Preenche o segundo select com as opções filtradas
                  $.each(opcoes, function(index, opcao) {
                      $("#Rua").append("<option value='" + opcao + "'>" + opcao + "</option>");
                  });
              }
          });
      });
  </script>
</head>

<body class="contPerfil">

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 barraPerfil">
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="perfil.php" class="nav-link itemB"><svg xmlns="http://www.w3.org/2000/svg"
            width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
          </svg> Voltar</a></li>
    </ul>
  </header>

  <main>
    <div class="formulario">
      <div>
        <form method="POST" action="reportController.php" class="form-signin container">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16" style="color: #30405C;">
            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
          </svg>
          <h1 class="textos"><strong>Reportar Foco</strong></h1>
          <h2 class="textos">Dados - Endereço</h2>
          <p class="textos">Escolha primeiro o BAIRRO pois assim as ruas serão filtradas!</p><br>


          <!-- Bairros -->
          <select class="marginTop form-select" id="Bairro" name="Bairro">
            <option selected value="Selecione um BAIRRO">Selecione um BAIRRO</option>
            <option value="Centro">Centro</option>
            <option value="Jardim Santo Antônio">Jardim Santo Antônio</option>
            <option value="Jardim Paraiso I">Jardim Paraiso I</option>
          </select>
          
          <!-- Bairros -->
          <select class="marginTop form-select" id="Rua" name="Rua">
            <option selected value="Selecione uma RUA">Selecione uma RUA</option>
            <!--CENTRO-->
            <option value="Rua Campos Sales">Rua Campos Sales</option>
            <option value="Rua Treze de Maio">Rua Treze de Maio</option>
            <option value="Rua Marechal Deodoro">Rua Marechal Deodoro</option>
            <!--JARDIM SANTO ANTONIO-->
            <option value="Rua Benedito Galdino">Rua Benedito Galdino</option>
            <option value="Rua Osmar Mantovani">Rua Osmar Mantovani</option>
            <option value="Rua Rodolfo Silvestre">Rua Rodolfo Silvestre </option>
            <!--JARDIM PARAISO I-->
            <option value="Rua Adival Bertoli">Rua Adival Bertoli</option>
            <option value="Rua Dr. Rafael Lofrano">Rua Dr. Rafael Lofrano</option>
            <option value="Rua Augusto Troiano">Rua Augusto Troiano</option>
          </select>
          
          <br>

          <div class="bloco1">
            <button type="submit" value="SALVAR" id="acao" name="acao" class="bton">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
              </svg>
              REPORTAR 
            </button>
          </div>
        </form>
      </div>

      <br>
      <br>

      <p class="textos">Em caso de dúvidas, por favor <a href="#" class="textos"><strong>clicar aqui</strong></a></p>

    </div>

  </main>
</body>
</html>