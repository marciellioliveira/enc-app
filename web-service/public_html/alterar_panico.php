<?php
  
 
 $email=$_GET['email'];
 $foto=$_GET['foto'];

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');  
  mysqli_select_db($conexao, 'id2085622_a');

	$pegaemail = mysqli_query($conexao, "SELECT id_user FROM users WHERE email = '".$email."'");
  $num_rows = mysqli_num_rows($pegaemail);

 if($num_rows == 1) {

  $sql = "insert into panico (email_usado,imagem_tirada) values ('".$email."','".$foto."')";
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