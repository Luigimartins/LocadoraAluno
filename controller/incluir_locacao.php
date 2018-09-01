<?php
   require '../persistence/dao_locacao.php';
   
   $objetoLocacao = new Locacao();
   $objetoLocacao->setDatalocacao($_REQUEST['dataLocacao']);
   $objetoLocacao->setDatadevolucao($_REQUEST['dataDevolucao']);
   $objetoLocacao->setFilme($_REQUEST['nomeFilme']);
   $objetoLocacao->setCliente($_REQUEST['nomeCliente']);
   
   $dao = new DAOLocacao();
   $dao->cadastrarLocacao($objetoLocacao); 
 	
	header('Location: ../view/view_locacao.php');
	exit;
?>