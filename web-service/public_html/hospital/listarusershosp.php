<?php

$email = $_GET['email'];

  $conexao = mysqli_connect('localhost','root','');
  
  mysqli_select_db($conexao, 'a');
  
  $sql="select * from users where email like '$email'";
  
  $resultado = mysqli_query($conexao,$sql) or die ("Erro: " . mysqli_error());
  
  // Obtém o resultado de uma linha como um objeto

if($resultado)
		  //echo "ok";
		 while($linha = mysqli_fetch_object($resultado)) {

	    echo "Dados Pessoais"."#";    
      echo "Nome: ".str_replace(',', ' ', $linha->nome)."#";
      echo "Sobrenome: ".str_replace(',', ' ', $linha->sobrenome)."#";
      echo "Endereço: ".str_replace(',', ' ', $linha->endereco_casa)."#";
      echo "Cidade: ".str_replace(',', ' ', $linha->cidade)."#";
      echo "Estado: ".str_replace(',', ' ', $linha->estado)."#";
      echo "Data de Nascimento: ".str_replace(',', ' ', $linha->data_nasc)."#";
      echo "Convênio Médico: ".str_replace(',', ' ', $linha->convenio_med)."#";
      echo "Doador de Orgão: ".str_replace(',', ' ', $linha->doador_orgao)."#";
      echo "Doador de Sangue: ".str_replace(',', ' ', $linha->doador_sangue)."#";
      echo "Tipo Sanguineo: ".str_replace(',', ' ', $linha->tipo_sanguineo)."#";
      echo "Alergia Alimentar: ".str_replace(',', ' ', $linha->alergia_alimentar)."#";
      echo "Alergia Medicamento: ".str_replace(',', ' ', $linha->alergia_medicamento)."#";
      echo "Doença: ".str_replace(',', ' ', $linha->doenca)."#";
      echo "Cirurgia: ".str_replace(',', ' ', $linha->cirurgia)."#";
      echo "Internação Recente: ".str_replace(',', ' ', $linha->internacao_recente)."#";
      echo "Latitude: ".str_replace(',', ' ', $linha->latitude)."#";
      echo "Longitude: ".str_replace(',', ' ', $linha->longitude)."#";
      echo "Endereço: ".str_replace(',', ' ', $linha->endereco)."#";

    /*echo "Nome: ".$linha->nome."#";
      echo "Sobrenome: ".$linha->sobrenome."#";
      echo "Endereço: ".$linha->endereco_casa."#";
      echo "Cidade: ".$linha->cidade."#";
      echo "Estado: ".$linha->estado."#";
      echo "Data de Nascimento: ".$linha->data_nasc."#";
      echo "Convênio Médico: ".$linha->convenio_med."#";
      echo "Doador de Orgão: ".$linha->doador_orgao."#";
      echo "Doador de Sangue: ".$linha->doador_sangue."#";
      echo "Tipo Sanguineo: ".$linha->tipo_sanguineo."#";
      echo "Alergia Alimentar: ".$linha->alergia_alimentar."#";
      echo "Alergia Medicamento: ".$linha->alergia_medicamento."#";
      echo "Doença: ".$linha->doenca."#";
      echo "Cirurgia: ".$linha->cirurgia."#";
      echo "Internação Recente: ".$linha->internacao_recente."#";
      echo "Latitude: ".$linha->latitude."#";
      echo "Longitude: ".$linha->longitude."#";
      echo "Endereço: ".$linha->endereco."#";*/
   }

   else
	
          echo "0";


 /* while($linha = mysqli_fetch_object($resultado)) {

      echo $linha->nome."#";
      echo $linha->sobrenome."#";
      echo $linha->endereco_casa."#";
      echo $linha->cidade."#";
      echo $linha->estado."#";
      echo $linha->data_nasc."#";
      echo $linha->convenio_med."#";
      echo $linha->doador_orgao."#";
      echo $linha->doador_sangue."#";
      echo $linha->tipo_sanguineo."#";
      echo $linha->alergia_alimentar."#";
      echo $linha->alergia_medicamento."#";
      echo $linha->doenca."#";
      echo $linha->cirurgia."#";
      echo $linha->internacao_recente."#";
      echo $linha->latitude."#";
      echo $linha->longitude."#";
      echo $linha->endereco."#";
   }
  echo "^";*/
?>
