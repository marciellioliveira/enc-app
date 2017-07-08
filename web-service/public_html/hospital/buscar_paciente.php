<?php

  
   session_start(); //abre sessões

try {
      $nomeRecebido=$_GET['nome'];
   
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=id2085622_a', 'id2085622_root', 'encosto');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT email FROM users WHERE nome='$nomeRecebido'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);

   
  if ($linha>0)
   {

       echo $email=$linha->email;

    //  $_SESSION['nome_usuario']=$lg;
   //   $_SESSION['valida']='1';
      //header("location:veiculos.php?nomec=$email");   

   }
   else
  {  
      $erro="n";
      header("location:veiculos.php?nomec=$erro"); 
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>