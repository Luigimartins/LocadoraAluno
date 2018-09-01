<?php
       require '../persistence/dao_luigibelchior.php';
   
   $objetoDao = new DAOLuigibelchior();
   $objetoDao->removerLuigibelchior($_REQUEST['codigo']);
 	
	header('Location: ../view/view_luigibelchior.php');
	exit;
?>