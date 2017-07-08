<?php
  $nome =$_GET['nome'];

  $conexao = mysqli_connect('localhost','root','');
  
  mysqli_select_db($conexao,'id2085622_a');
  
  $sql="select * from users where nome like '$nome'";
  
  $resultado = mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error());
  
  // Obtém o resultado de uma linha como um objeto
  while($linha = mysqli_fetch_object($resultado)) {
        echo $linha->nome."#";
  echo $linha->sobrenome."#";
  echo $linha->email."#";
    }
  echo "^";

?>