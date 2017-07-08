<?php

   $em=$_POST['email'];
   $se=$_POST['senha'];

   session_start(); //abre sessões

try {

   $conn=new PDO('mysql:host=localhost;port=3306;dbname=id2085622_a','id2085622_root','encosto');

   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
   $consulta = $conn->query("SELECT * FROM funcionarios WHERE email='$em' AND senha='$se'");
   $linha = $consulta->fetch(PDO::FETCH_ASSOC);
   
   if ($linha>0)
   {

      $_SESSION['nome_usuario']=$lg;
      $_SESSION['valida']='1';
      header('location:pacientes.php');

      echo "Tudo certo, entrada permitida";

   }
   else
   {
      echo "Usuario invalido, tente de novo";
   }
   
 } // fecha try
 catch(PDOException $e)
 {
   echo 'ERRO: ' . $e->getMessage();
 }
?>