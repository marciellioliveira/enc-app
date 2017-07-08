<?php
  
  //Inserir/Alterar histórico médico
  $email=$_GET['email'];
  $convenio=$_GET['convmedic'];
  $doadororg=$_GET['doadororg'];
  $doadorsang=$_GET['doadorsang'];
  $tipo_sang=$_GET['tiposang'];
  $alergaliment=$_GET['alergaliment'];
  $alergmedic=$_GET['alergmedic'];
  $temdoenc=$_GET['temdoenc'];
  $temcirurg=$_GET['temcirurg'];
  $temintern=$_GET['temintern'];

  $conexao = mysqli_connect('localhost','id2085622_root','encosto');

  
  mysqli_select_db($conexao, 'id2085622_a');

	$pegaemail = mysqli_query($conexao, "SELECT id_user FROM users WHERE email = '".$email."'");
  $num_rows = mysqli_num_rows($pegaemail);

 if($num_rows == 1) {

  //echo $email."<br>";
 // echo $convenio."<br>";
 // echo $doadororg."<br>";
 // echo $doadorsang."<br>";
  //echo $tipo_sang."<br>";
  //echo $alergaliment."<br>";
  //echo $alergmedic."<br>";
  //echo $temdoenc."<br>";
 // echo $temcirurg."<br>";
 // echo $temintern."<br>";

  $sql = "update users set convenio_med='".$convenio."', doador_orgao='".$doadororg."', doador_sangue='". $doadorsang."', tipo_sanguineo='".$tipo_sang."', alergia_alimentar='".$alergaliment."', alergia_medicamento='".$alergmedic."', doenca='".$temdoenc."', cirurgia='".$temcirurg."', internacao_recente='".$temintern."' where email='".$email."'";
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