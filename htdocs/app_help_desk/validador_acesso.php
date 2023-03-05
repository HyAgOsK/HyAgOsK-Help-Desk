<?php

  session_start(); 

  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!= 'SIM') {
    header('Location: index.php?login=erro2');
  }
  //todas páginas compartilhando o mesmo valor de sessão autenticado SIM respondendo no valida login
?>