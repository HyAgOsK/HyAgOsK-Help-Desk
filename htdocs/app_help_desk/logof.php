<?php

	session_start();
	//precisamos iniciar sempre com session_start() antes de manipular a super global

/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


	// exemplo vou remover um indice especifico
	unset($_SESSION['x']);// remove o indice apenas se existir SEM ERRO

	//remover indices do array de sessao
	//unset(), remove indice de qualquer arrays
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';



	//caso seja destruir completamente
	//ou destruir a sessao por completo
	//session_destroy() remove indices dentro da superglobal session


	session_destroy(); // SESSÃO será destruida, ainda assim teremos a saida dos dados pois a requisicao foi feita

	//apos executar
	//force um redirecionamento, nova requisicao http, onde a variavel de sessão nao estarao mais disponível
 
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//mesmo destruindo a sessao continuará disponível
	//porem ao atualizar, ou ir para outra página e retornar, nao haverá mais índices
	// haverá apenas um primeiro print, mostrando tudo, depois
	
			Array
			(
			)
			Array
			(
			)
			Array
			(
			)

	*/


	//usando o redirecionamento 
	session_destroy();
	//fiz a requisicao assim teremos todos arrays vazios, sem autenticado sem x e y de teste
	header('Location: index.php');

 ?>