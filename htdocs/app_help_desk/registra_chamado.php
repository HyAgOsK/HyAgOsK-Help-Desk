<?php
	
	//array por enquanto esta vazio, ainda nao tem names
	//assim nao tem chave valor

	//txt para registro destes dados
	session_start();

	//para se evitar separaçao indevida devido ao #
	$titulo = str_replace('#','-',$_POST['titulo']);
	$categoria = str_replace('#','-', $_POST['categoria']);
	$descricao = str_replace('#','-', $_POST['descricao']);


	//podemos usar também um implode ao invez de cada um dos indices, ou seja transformando o array completo em uma string
	//implode ('#','$_POST);

	//por seguida devemos mostrar o que sera escrito no arquivo
	//formatando o POST de array para texto
	$texto = $_SESSION['id']. '#' .$titulo.'#'. $categoria.'#'.$descricao . PHP_EOL;
	// nao podemos usar # para separar os dados pois se conter isso pode misturar e ai fudeu 
	//ao fazer outro arquivo ele fica na mesma linha do chamado anterior, isso pode ser ajustado com constante do PHP PHP_EOL ou | pipe 


	//funcao nativa do php
	//hd pode ser extensão qualquer é texto puro
	// podemos atribuir uma extensao própria
	//php.net -------------------> a abre arquivo para escrita
	
	//abrindo arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

	//primeiro referencia do arquivo aberto que estava no inicio com fopen , string dos dados

	//escrevendo texto
	fwrite($arquivo, $texto);
	//fechando arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');
	
/*
	echo '<br>';
	echo $texto;
*/
?>