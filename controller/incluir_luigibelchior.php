<?php   
   require '../persistence/dao_luigibelchior.php';
   
   $objetoLuigibelchior = new Luigibelchior();
   $objetoLuigibelchior->setprimeiroNome($_REQUEST['primeiroNome']);
   $objetoLuigibelchior->setultimoNome($_REQUEST['ultimoNome']);
   
   
   $dao = new DAOLuigibelchior();
   $dao->cadastrarLuigibelchior($objetoLuigibelchior); 
 	
	header('Location: ../view/view_luigibelchior.php');
	exit;
?>