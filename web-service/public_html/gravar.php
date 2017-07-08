<?php

  //Vai ser usada uma vez quando o usuário fizer cadastro pela primeira vez

  $email =$_GET['email'];
  $senha =$_GET['senha'];  
  $padrao = 'padrao';

  $conexao = mysqli_connect('localhost','root','');
  
  mysqli_select_db($conexao,'a');


	  $sql = "insert into users (email,senha, latitude, longitude, endereco, nome, sobrenome, endereco_casa, cidade, estado, data_nasc, convenio_med, doador_orgao, doador_sangue, tipo_sanguineo, alergia_alimentar, alergia_medicamento, doenca, cirurgia, internacao_recente) values ('$email','$senha','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao','$padrao')";  

	  
  $resultado = mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error());
  
  if($resultado)
		  echo "ok";
   else
	
          echo "0";
?>
