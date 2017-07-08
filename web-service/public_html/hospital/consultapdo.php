<?php
  session_start();
  if(isset($_SESSION['valida']))
  {
  try{
  $conectar=new PDO('mysql:host=127.0.0.1;port=3307;dbname=b_hospital', 'root', '');
  $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dados=$conectar->query("SELECT * FROM funcionarios");
  
  foreach($dados as $linha)
  {
  echo $linha['em'];
  }
  } // fecha try
  
  catch (PDOException $erro)
  {
    echo "Nao posso fazer a pesquisa";
  }
  }
  else
  {
    echo "<script>
         alert('Usuário já existe!');
       document.location.href=('index.php');
       </script>";
  }
 ?>