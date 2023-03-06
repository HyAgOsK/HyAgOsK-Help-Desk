<?require_once 'validador_acesso.php';?>
<?php
  //chamados
  $chamados = array();

  //abrir o arquivo txt
  $arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');

  while (!feof($arquivo)) {
    //linhas

    //fgets que recupera os dados de um arquivo na primeira linha, depois segunda linha e por ai vai
    $registros = fgets($arquivo);
    $chamado_dados = explode('#',$registros);
                    //se estiver no array chamado dados menos que 3 indices falta algum do titulo categoria ou descricao então nao entra 


                    // TESTE DE PERFIL DE USUÁRIO 
    if ($_SESSION['perfil_id'] == 2) {
      //so vamos exibir o chamado se ele for CRIADO pelo usuario autenticado, indice 0 representado o id do array 
      if($_SESSION['id'] != $chamado_dados[0]){
        //caso seja diferente o chamado nao foi aberto pelo usuário
        continue;
        //desconsiderando todo código abaixo
      }
      else{
        $chamados[] = $registros;
      }

    }
    else{
      $chamados[] = $registros;
    }
  }
  fclose($arquivo);
                  
  //percorrer linha de cada arquivo, um while enquanto tiver linhas ou registros dos dados 
  //feof() percorre lendo cada uma das linhas, ate  encontrar o PHP EOF END OF FILE e assim jaeraa
  //ela retorna verdadeiro se encontrar o final do arquivo, portanto devemos usar a negação 
 
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>  
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

    <!--Lista ordenada para fazer logoff do aplicativo-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logof.php">SAIR</a>
       </li>
    </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              <b>Consulta de chamado Ordenado</b>
            </div>
            
            <div class="card-body">
              <?
                $j = count($chamados)-1;
                $ordena_chamados = array();
                for ($i=0; $i < count($chamados) ; $i++) { 
                  $ordena_chamados[] = $chamados[$j];
                  $j--;
                }
              ?>
              <?foreach($ordena_chamados as $chamado){?>
                <?php 
                  $chamado_dados = explode('#', $chamado);
                  //aqui teremos os dados sendo separados ao inves de unidos com implode(), explode() retorna um array
                  if (count(($chamado_dados))<3 || $chamado_dados[1] == '' || $chamado_dados[2] == '' || $chamado_dados[3] == '') {
                    //continuamos para impressão, e não será impresso o dado
                    continue;
                  }
                  print_r ($chamado_dados)   ;
                ?>
                <div class="card mb-3 bg-light">
                  <form method="GET">
                      <div class="card-body">
                          <h5 class="card-title" name ="titulo"><?=$chamado_dados[1]?></h5>
                          <h6 class="card-subtitle mb-2 text-muted" name ="categoria"><?=$chamado_dados[2]?></h6>
                          <p class="card-text" name ="descricao"><?=$chamado_dados[3]?></p>
                        </div>
                  </form>
                </div>
              <?}?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>