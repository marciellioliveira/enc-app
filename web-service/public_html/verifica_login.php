<?php

  $emailD=$_GET['email'];
  $senhaD=$_GET['senha'];

// Abre a conexão com o servidor do MySQL
  $conexao = mysqli_connect('localhost',id2085622_root','encosto');
  
  // Seleciona um banco de dados MySQL
  mysqli_select_db($conexao, 'id2085622_a');
  
  // variavel com o comando que queremos executar
  $sql="SELECT id_user FROM users WHERE email='$emailD' AND senha='$senhaD'";	
  
  // Envia uma consulta MySQL, ou Retorna o texto da mensagem de erro da operação MySQL anterior
  $resultado = mysqli_query($conexao, $sql) or die ("Erro .:" . mysqli_error());
  $num_row =mysqli_num_rows($resultado);
  
	$row = mysqli_fetch_array($resultado);

        if($num_row >= 1) {
	  echo "ok";
	} else {

 echo "0";

 }
?>