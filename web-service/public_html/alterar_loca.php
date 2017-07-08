<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  echo $actual_link;
  echo $email=$_GET['email'];
  echo $lat=$_GET['lat'];
  echo $lon=$_GET['lon'];
  echo utf8_decode($end=$_GET['end']);

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');
  
  mysqli_select_db($conexao, 'id2085622_a');

	$pegaemail = mysqli_query($conexao, "SELECT id_user FROM users WHERE email = '".$email."'");
  $num_rows = mysqli_num_rows($pegaemail);

 if($num_rows == 1) {

  //echo $email."<br>";
 // echo $lat=$_GET['lat'];
 // echo $lon=$_GET['lon'];
 // echo $end=$_GET['end'];
 
  $sql = "update users set latitude='".$lat."', longitude='".$lon."', endereco='".$end."' where email='".$email."'";
   $result = mysqli_query($conexao, $sql);
    if($result){
        echo "ok";
    }else {
        echo "0";
        //entrando aqui
    }
} else {
  echo "0";
}
  
?>