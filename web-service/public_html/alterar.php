<?php
  
 
 $email=$_GET['email'];
  $nome=$_GET['nome'];
 $sobrenome=$_GET['sobrenome'];
  $endereco_casa=$_GET['endereco'];
  $cidade=$_GET['cidade'];
  $estado=$_GET['estado'];
  $idade=$_GET['idade'];

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');  
  mysqli_select_db($conexao, 'id2085622_a');

	$pegaemail = mysqli_query($conexao, "SELECT id_user FROM users WHERE email = '".$email."'");
  $num_rows = mysqli_num_rows($pegaemail);

 if($num_rows == 1) {

  //echo $email."<br>";
  //echo $nome."<br>";
  //echo $sobrenome."<br>";
  //echo $endereco."<br>";
  //echo $cidade."<br>";
  //echo $estado."<br>";
  //echo $idade."<br>";


  $sql = "update users set nome='".$nome."', sobrenome='".$sobrenome."', endereco_casa='".$endereco_casa."', cidade='".$cidade."', estado='".$estado."', data_nasc='".$idade."' where email='".$email."'";
   $result = mysqli_query($conexao, $sql);
    if($result){
        echo "ok";
    }else {
        echo "0";
    }
} else {
  echo "0";
}
  
?>