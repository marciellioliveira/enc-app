<?php 

  session_start();
  //already logged in
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
    exit(header("Location: admin_panel.php"));
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>
 
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- Bootstrap -->
   
      <link rel="stylesheet" href="css/estilo.css">
      <link rel="stylesheet" href="css/style.css">   

  </head>
  <body>

  <div class="jumbotron">

<div class="col-md-4">
    <div class="thumbnail">
      <a href="https://drive.google.com/file/d/0BwCy-so83jIDVnJ4OFFZUzU3d0k/view?usp=sharing">
        <img src="https://self-flattering-hou.000webhostapp.com/hospital/downa.png" alt="Download APP" style="width:5%; padding:10px">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
  <div class="container">
  <div class="row">
   <div class="form" style="background-color: #0B7C34">     
      
      
       <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastro</a></li>
        <li class="tab active"><a href="#login">Entre</a></li>
      </ul>
       
       <div class="tab-content">


        <?php echo (isset($_SESSION['error'])?'<span style="color:red">'.$_SESSION['error'].'</span>':null); ?>

          <div class="col-lg-12" id="login">
          
           <h1>Olá!</h1>
           <form action="login_pdo.php" method="post" >  <!-- Login -->               
               
                  <div class="field-wrap">
                  <label>
                    Email<span class="req">*</span>
                  </label>
                  <input type="email"required autocomplete="off" name="email"/>
                </div>

                <div class="field-wrap">
                  <label>
                    Senha<span class="req">*</span>
                  </label>
                  <input type="password"required autocomplete="off" name="senha"/>
                </div>

                 <p class="forgot"><a href="#">Esqueceu sua senha??</a></p>
             
              <a href="#"> <button class="button button-block"/>Entrar</button>    </a>               

          </form>

          </div>   

         <div class="col-lg-12" id="signup">

          <h1>Cadastre-se!</h1>
          
        
         <form method="POST" id="cadastro" name="cadastro" action="grava.php"> <!-- Cadastrar -->                      
                
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="primeiroNome" />
            </div>
        
            <div class="field-wrap">
              <label>
                Sobrenome<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="segundoNome" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="senha" />
          </div>
          
          <button type="submit" class="button button-block"/> Cadastre-se</button>   

          </form>

          </div>
         
          </div>

        </div>
        </div>
        </div>
        </div>


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>
  </body>
</html>

<?php 

  #Unset error as its only required once
  unset($_SESSION['error']);

?>