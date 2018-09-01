<?php
    require_once 'conexao.php';
	include '../model/class_luigibelchior.php';
	
	class DAOLuigibelchior{
		
		private $conexao;
		
		public function __construct(){
			$this->conexao = new Conexao();
				 if($this->conexao->conectar() == false){
				 	 echo "Não conectou!" . mysql_error();	
				 }
		}	
		
		public function cadastrarLuigibelchior(Luigibelchior $Luigibelchior){
			$primeiroNome = $Luigibelchior->getprimeiroNome();
			$ultimoNome = $Luigibelchior->getultimoNome();
			

			$sql = "INSERT INTO luigibelchior (primeiroNome, ultimoNome) VALUES ('$primeiroNome', '$ultimoNome')";
			$this->conexao->executarQuery($sql);
		}
		
		public function listarLuigibelchior(){
			$lista = $this->conexao->executarQuery("SELECT * FROM luigibelchior");
			$arrayLuigibelchior = array();
			
			while ($linha = mysqli_fetch_array($lista)) {
				$Luigibelchior = new Luigibelchior($linha['codigo'],$linha['primeiroNome'],$linha['ultimoNome']);
				array_push($arrayLuigibelchior,$Luigibelchior);
			}
			return $arrayLuigibelchior;
		}
		
		public function removerLuigibelchior($codigo){
			$sql = "DELETE FROM luigibelchior WHERE codigo = '$codigo'";
			$this->conexao->executarQuery($sql);
		}
		 
		
	}
	
?>