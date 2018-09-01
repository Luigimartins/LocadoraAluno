<?php
	require '../persistence/dao_luigibelchior.php';
	$daoLuigibelchior = new DAOLuigibelchior();
	$listaLuigibelchior = $daoLuigibelchior->listarLuigibelchior();
	
?>


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
            <li ><a href="view_filme.php">Filmes</a></li>
            <li ><a href="view_cliente.php">Clientes</a></li>
            <li><a href="view_locacao.php">Locações</a></li>
            <li class="active"><a href="#">Luigi Belchior</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div class="jumbotron" style="background-image:url('red.jpeg'); color: #FFFFFF;">
  	<div class="container" >  
		<h1>Locadora de Filmes</h1>
	</div><!-- fim .container dentro do jumbotron -->
</div><!-- fim .jumbotron -->


<div class="container">
	
	<form action="../controller/incluir_luigibelchior.php" method="post">
		<fieldset>
	  		<legend>Novo Parente</legend>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="primeiroNome" name="primeiroNome" placeholder="Primeiro Nome">
	  		</div>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="ultimoNome" name="ultimoNome" placeholder="Ultimo Nome">  
	  		</div>
	
	  
	  		<button type="submit" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-thumbs-up"></span>
	  				Cadastrar
			</button>
		</fieldset>  
	</form> 			
</div> <!-- fim .container 1 --> 

<div class="container">
 	<br /> <br /> 
</div> <!-- fim .container 2 -->
	
	
<div class="container">
  <div class="panel panel-default">
  		<div class="panel-heading">
    		<h2 class="panel-title">Lista de Parentes</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Primeiro Nome</th>
  						<th>Ultimo Nome</th>
  						
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoLuigibelchior = array_shift($listaLuigibelchior)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoLuigibelchior->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo $objetoLuigibelchior->getprimeiroNome(); ?></td>
    					<td class="col-md-1"><?php echo $objetoLuigibelchior->getultimoNome(); ?></td>
    					
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_Luigibelchior.php?codigo=<?= $objetoLuigibelchior->getCodigo(); ?>" role="button">Excluir</a>  								
    					</td>
    				</tr>
    			<?php
					}
    			?>
    				
    			</table>
    			
 		</div><!-- fim .panel-body -->
	</div><!-- fim .panel -->
</div><!-- fim .container 3 -->

    </body>
</html>