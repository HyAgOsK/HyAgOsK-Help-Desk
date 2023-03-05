<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body  style="background-color: rgba(0, 128, 180, 0.7);">

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              <b>Login</b>
            </div>
            <div class="card-body">
              
              <!--Todo formulário que eu quiser fazer para enviar os dados eu coloco o atribudo da tag html action="" que é o destino de um formulário -->
              
              <!--Para agora retirar tudo que tem de informação enviada pelo form é necessário colocar method="" pois o GET faz a requisição de visualização e requisição para o URL da página mostrando SENHA E E-MAIL, para isso mudamos a requisição aqui no fornulário-->
              <form  action="valida_login.php" method="POST">
                <div class="form-group">
                  <!--Para que eu possa pegar e manipular os dados precisamos do atributo name="" apenas fazendo isso retorna os dados diretamente no link que foi requisitado diretamente BROWSER para URL-->
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php
                  // abrindo aqui podemos manipular com a global GET os valores de erro de autenticação entre outros parâmetros $_GET['login'] do que eu tinha puxado anteriormente com header(pagina oficial/?login ...)

                  //http://localhost/app_help_desk/index.php ao chamar esse link, a página HTML avisa que GET nao foi definido ou seja abrindo a página principal, assim precisa tratar este parâmetro --> $_GET['login'] 


                  // PHP com a funcao isset() verifica se o valor está setado ou nao, se existe ou nao, por isso usamos para retirar esse erro
                  if (isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>


                <!--Forma de apresentação dos dados de erro apenas se entrar na condicional do PHP-->
                <div class="text-danger">
                  Usuário ou senha inválidos!
                </div>
                <?php
                  }
                ?>
                <!--Verificacao caso acesse paginas restritas -->
                <?php
                  if (isset($_GET['login']) && $_GET['login'] == 'erro2'){
                ?>
                <!--Forma de apresentação dos dados de erro apenas se entrar na condicional do PHP-->
                <div class="text-danger">
                  <b>
                  Faça login antes de acessar as páginas !!!
                  <b/>
                </div>
                <?php
                  }
                ?>
                  
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
  <footer style="text-align: center; margin-top: 100px;">&copy; HyagoSK Help Desk</footer>
</html>