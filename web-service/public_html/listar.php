<?php

  $email = $_GET['email'];

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');
  
  mysqli_select_db($conexao, 'id2085622_a');
  
  $sql="select * from users where email like $email";
  
  // Obtém o resultado de uma linha como um objeto
  while($linha = mysqli_fetch_object($resultado))
      echo $linha->nome."#";
  echo "^";

    $resultado = mysqli_query($conexao,$sql) or die ("Erro: " . mysqli_error());

   if($resultado)
		  echo "ok";
   else
	
          echo "0";

?>