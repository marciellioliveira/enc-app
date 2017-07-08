<?php
  $nome=$_GET['nome'];
  
  $conexao = mysql_connect('localhost','root','');
  
  mysql_select_db('a',$conexao);
  
  $sql = "delete from users where nome like '$nome'";

  $resultado = mysql_query($sql) or die ("Erro: " . mysql_error());
  
  if($resultado)
		  echo "ok";
   else
          echo "0";
?>
