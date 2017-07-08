<?php

  $emailD=$_GET['email'];
  $senhaD=$_GET['senha'];

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');
  

  mysqli_select_db($conexao, 'id2085622_a');
  
 
  $sql="SELECT id_user FROM users WHERE email='$emailD' AND senha='$senhaD'";	
  
 
  $resultado = mysqli_query($conexao, $sql) or die ("Erro .:" . mysqli_error());
  $num_row =mysqli_num_rows($resultado);
  
	$row = mysqli_fetch_array($resultado);

        if($num_row >= 1) {
	  echo "ok";
	} else {

 echo "0";

 }
?>