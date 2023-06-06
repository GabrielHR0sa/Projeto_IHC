<!DOCTYPE html>
<html lang="pt-BR">

<?php
    include('db_config.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Foco na Dengue - Registro de Casos</title>

    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="pesquisar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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

    function exibirContato() {
      var telefone = "123456789";
      var email = "exemplo@example.com";
      var mensagem = "Telefone: " + telefone + "\nE-mail: " + email;
      alert(mensagem);
    }
    </script>
</head>

<body class="contPerfil">

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 barraPerfil">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="perfil.php" class="nav-link itemB">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                    </svg> 
                    Voltar
                </a>
            </li>
        </ul>
    </header>

    <main>
        <div class="interior">
            <div class="album py-5">
                <div class="container">

                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"  class="bi bi-search" viewBox="0 0 16 16" style="color: #30405c">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>

                    <h1 class="textos"><strong>PESQUISAR FOCOS</strong></h1>
                    <p class="textos">Preencha os campos e depois clique em "Pesquisar"</p>
                    <p class="textos">Escolha primeiro o BAIRRO pois assim as ruas serão filtradas!</p><br>

                    <form method="POST" action="pesquisarController.php">
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
                        
                        <div class="bloco1">
                            <button type="submit" value="PESQUISAR" id="acao" name="acao" class="bton">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            PESQUISAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <p class="textos">Em caso de problemas, por favor <a href="#" class="textos" onclick="exibirContato()"><strong>clique aqui</strong></a></p>

</body>

</html>