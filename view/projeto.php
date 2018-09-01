<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Locadora</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  
  <body>
 	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          	<a class="navbar-brand" href="#">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li><a href="#">Sobre</a></li>
            <li class="active"><a href="#">Ajuda</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div class="jumbotron" style="background-image:url('red.jpeg'); color: #FFFFFF;">
  	<div class="container" >  
		<h1>Jogo da Forca</h1>
	</div><!-- fim .container dentro do jumbotron -->
</div><!-- fim .jumbotron -->

<div>

  <?php
  $le="informatica";
  $cont=strlen($le);
  
  for ($i=0; $i < $cont; $i++) { 
    echo "_";
    
  }
  echo PHP_EOL.$cont." letras".PHP_EOL; 

  
?>


 


    			
 	

    </body>
</html>