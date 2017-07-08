<?php
  // Abre a conexão com o servidor do MySQL
  $conexao = mysql_connect('localhost','root','');
  
  // Seleciona um banco de dados MySQL
  mysql_select_db($conexao, 'a');
  
  // variavel com o comando que queremos executar
  $sql="select * from users";
  
  // Envia uma consulta MySQL, ou Retorna o texto da mensagem de erro da operação MySQL anterior
  $resultado = mysql_query($conexao, $sql) or die ("Erro .:" . mysql_error());

  // Obtém o número de linhas em um resultado
  // se possuir pelo menos uma linha ele deve retornar ok, caso contrário 0
  if (mysql_num_rows($resultado) > 0)
      echo "ok";
  else
      echo "0";
?>
