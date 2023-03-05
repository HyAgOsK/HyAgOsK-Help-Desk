<?php

  //RECURSO DE SESSAO PARA BACKEND fazer uma ponte entre o lado do cliente e o servidor assim tratando de informações para acessar diretórios privados ou ocultos, pois apenas por um condicional realmente será acessado o diretório entre outras tratativas

  //sempre antes de qualquer instrução que é requisitada para navegador alguma saida
  // antes do echo por exemplo ou qualquer exibição de dados


  //valores de cada navegador e assim em uma guia anônima, ou um cookie a partir da requisição http, e assim aquela seção é possível, cada sessão PHP dura 3 horas, em média, assim ou dias.

  session_start();
  //super global SESSION array tambe´m

  //print_r($_SESSION);

  // COMO AINDA NAO SE TRABALHA COM BANCO DE DADOS ESTE ARRAY REPRESENTA OS DADOS DE ARMAZENAMENTO DOS LOGINS
  
  $usuario_autenticado = false;

  //usuario id 
  $usuario_id = null;
  $usuario_perfil_id = null;

  //nivel de usuário e adm
  $perfis = array( 1 => 'administrativo', 2=> 'usuario');

  $array_users = array(
    array('id'=> 1,'email' => 'adm@teste.com.br' ,'password'=> '123456','perfil_id'=>1),
    array('id'=> 2,'email' => 'hyagovieira@geb.inatel.br' ,'password'=> 'aicalica','perfil_id'=>1),
    array('id'=> 3,'email' => 'maria@gmail.com' ,'password'=> '1234','perfil_id'=>2),
    array('id'=> 4,'email' => 'joao@gmail.com' ,'password'=> '1234','perfil_id'=>2),
  );

  //percorrendo os arrays independentes de usuários
  foreach ($array_users as $user) {
    /*
    echo 'Usuário app > '. $user['email']. 'Senha > '.$user['password'];
    echo '<br>';
    echo 'Usuario form'. $_POST['email']. 'Senha > '.$_POST['password'];
    echo '<hr>';
  */
    if($user['email']== $_POST['email'] and $user['password'] == $_POST ['password']){
      $usuario_autenticado = true;
      $usuario_id = $user['id'];
      $usuario_perfil_id = $user['perfil_id'];
      //INDICE INDICANDO SE A SESSÃO É VALIDA ASSIM COMO A VARIAVEL BOLLEANA
    }
    
  }

  if($usuario_autenticado){
      //desvio forçando redirecionamento
      //acusando erro de autenticação na página por funcao header de cabeçalho,
      // encaminhando um parâmetro via GET "?login=erro"
      $_SESSION['autenticado'] = 'SIM';

      //um pouco mais complexo para teste
      $_SESSION['id'] = $usuario_id;

      //indice de nivel de usuario
      $_SESSION['perfil_id'] = $usuario_perfil_id;
      header('Location: home.php');
  }
  else{
      header('Location: index.php?login=erro');
      $_SESSION['autenticado'] = 'NAO';
  }
  //super global get, como método de requisição do servidor PHP vindo do cliente que enviou este formulario de acordo com o campo name deste input de cada uma delas 

  // para o BROWSER ele entende HTML e JS agora o PHP apenas disto tudo nao é visto no navegador
  // ou seja criará uma pagina html este formulário pós login enviado DINÂMICA
  // DINÂMICA DEVE SER CLARA 


  /* MUDANDO O MÉTODO AGORA POST
  */
  



  /*
  print_r($_GET);

  echo '<br/>';

  print_r($_GET['email']);

  echo '<br/>';

  print_r($_GET['password']);  

  */


  /*
  print_r($_POST['email']);
  
  echo '<br/>';

  print_r($_POST['password']);
  echo '<br/>';
  */

?>