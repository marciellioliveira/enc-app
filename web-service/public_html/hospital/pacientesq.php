<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hospital</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="pacientes.php">Hospital</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
      <!--  <li><a href="veiculos.php">Pânico</a></li>-->
      </ul>

      
      <ul class="nav navbar-nav navbar-right">
    <!--  <form class="navbar-form navbar-left" name="form" action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control"  name="pessoa" id="pessoa" placeholder="Pesquise aqui">
        </div>
        <button type="text" class="btn btn-default">Enviar</button>

      
      </form>-->
    
        <li><a href="sair.php">Sair</a></li>         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="teste">
<div class="heart-rate">
  <svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="73px" viewBox="0 0 150 73" enable-background="new 0 0 150 73" xml:space="preserve">
    <polyline fill="none" stroke="#009B9E" stroke-width="3" stroke-miterlimit="10" points="0,45.486 38.514,45.486 44.595,33.324 50.676,45.486 57.771,45.486 62.838,55.622 71.959,9 80.067,63.729 84.122,45.486 97.297,45.486 103.379,40.419 110.473,45.486 150,45.486"
    />
  </svg>
  <div class="fade-in"></div>
  <div class="fade-out"></div>
</div>
</div>

    <div class="container">    



    <form class="navbar-form " name="form" action="" method="post">      
        <div class="form-group">
          
          <input type="text" class="form-control"  name="pessoa" id="pessoa" placeholder="Nome da pessoa">

        </div>
        <button type="text" class="btn btn-default">Procurar</button>
      
      </form>
     
           <div class="jumbotron jbCor">


           <?php
       if (isset($_POST['pessoa'] ) ) {
         
       $nomeprocurado=$_POST['pessoa'];
if(strpos($nomeprocurado, ',') !== false)
{
//echo "tinha virgula agora nao tem";
$valor1 = str_replace(',', ' ',$nomeprocurado);
 $valorcorreto = substr("$valor1", 0, -1);

} else {
//echo "nunca teve virgula";
 $valorcorreto = $nomeprocurado;
}
//var_dump($valorcorreto);
         $conexao = mysqli_connect('localhost','id2085622_root','encosto');
  
        mysqli_select_db($conexao, 'id2085622_a');      

        $sql="select * from users where nome like '$valorcorreto'";
        $sql2="select * from panico where email_usado like '$valorcorreto'";
  
  $resultado = mysqli_query($conexao,$sql) or die ("Erro SQL1: " . mysqli_error());
  $resultado2= mysqli_query($conexao, $sql2) or die ("Erro SQL2: " . mysqli_error());

  

if($resultado) 
      //echo "ok";

  if($resultado2) {
    while ($linha2 = mysqli_fetch_object($resultado2)) {
      $email=$linha2->email_usado;
      $imagem=$linha2->imagem_tirada;
    }
  }
     while($linha = mysqli_fetch_object($resultado)) {

      $nome=$linha->nome;
     // $nome=str_replace(',', ' ', $linha->nome)." ";
      $sobrenome=str_replace(',', ' ', $linha->sobrenome)." ";
      $endereco_casa=str_replace(',', ' ', $linha->endereco_casa)." ";
      $cidade=str_replace(',', ' ', $linha->cidade)." ";
      $estado=str_replace(',', ' ', $linha->estado)." ";
      $datanascimento=str_replace(',', ' ', $linha->data_nasc)." ";
      $convenio_med=str_replace(',', ' ', $linha->convenio_med)." ";
      $doador_orgao=str_replace(',', ' ', $linha->doador_orgao)." ";
      $doador_sangue=str_replace(',', ' ', $linha->doador_sangue)." ";
      $tipo_sanguineo=str_replace(',', ' ', $linha->tipo_sanguineo)." ";
      $alergia_alimentar=str_replace(',', ' ', $linha->alergia_alimentar)." ";
      $alergia_medicamento=str_replace(',', ' ', $linha->alergia_medicamento)." ";
      $doenca=str_replace(',', ' ', $linha->doenca)." ";
      $cirurgia=str_replace(',', ' ', $linha->cirurgia)." ";
      $internacao_recente=str_replace(',', ' ', $linha->internacao_recente)." ";
      $latitude=str_replace(',', ' ', $linha->latitude)." ";
      $longitude=str_replace(',', ' ', $linha->longitude)." ";
      $endereco=str_replace(',', ' ', $linha->endereco)." ";
 echo '
           <div class="row mostraCarro">
               <h1>Email da tabela panico: '.$email.'</h1>
          <h1>Paciente: '.$nome.' '.$sobrenome.'</h1>
        
            <div class="col-xs-12 col-md-6">
              <a href="#" class="thumbnail">
                <img src="'logo.png'" alt="...">
              </a>
            </div>
            <div class="col-xs-12 col-md-6">
            
             <u><h4>Dados Pessoais - Pré cadastrados pelo usuário</h4></u><br>
             <p><b>Endereço:</b> '.$endereco_casa.'</p>
             <p><b>Cidade:</b> '.$cidade.'</p>
             <p><b>Estado:</b> '.$estado.'</p>
             <p><b>Data de Nascimento:</b> '.$datanascimento.'</p>
             <p><b>Convênio Médico:</b> '.$convenio_med.'</p>
             <p><b>Doador de Orgão:</b> '.$doador_orgao.'</p>
             <p><b>Doador de Sangue:</b> '.$doador_sangue.'</p>
             <p><b>Tipo Sanguineo:</b> '.$tipo_sanguineo.'</p>
             <p><b>Alergia Alimentar:</b> '.$alergia_alimentar.'</p>
             <p><b>Alergia Medicamento: </b>'.$alergia_medicamento.'</p>
             <p><b>Doença:</b> '.$doenca.'</p>
             <p><b>Cirurgia:</b> '.$cirurgia.'</p>
             <p><b>Internação Recente: </b>'.$internacao_recente.'</p>

             <u><h4>Dados Atuais - Usuário apertou botão do pânico</h4></u><br>
             <p><b>Latitude:</b> '.$latitude.'</p>
             <p><b>Longitude:</b> '.$longitude.'</p>
             <p><b>Endereço: </b>'.$endereco.'</p>
              <br>
           
           
            </div>
          </div>
        ';
     }

    }else{ //else do isset pessoa

      /* <p>Clique no botão abaixo, caso você queira enviar um alerta para o médico de plantão do seu hospital</p><br>
            <p><a class="btn btn-primary btn-lg btnCor" href="#" role="button">ALERTA</a></p>*/
  

         // echo "<br><br><br><br><h1>Paciente não encontrado</h1>";

      }




        
        ?>
   
            </div>         
      </div>

    <nav class="navbar navbar-default navbar-fixed-bottom fundo">
      <div class="container">
        <p>Desenvolvido por: EncostoAPP</p>
      </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>