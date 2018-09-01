<?php
   class Luigibelchior{
   		private $codigo;
		private $primeiroNome;
		private $ultimoNome;
		
		
		public function __construct($codigo=0, $primeiroNome="", $ultimoNome=""){
			$this->codigo = $codigo;	
			$this->primeiroNome = $primeiroNome;
			$this->ultimoNome = $ultimoNome;
			
		}
		
		
		
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
		
		public function setprimeiroNome($primeiroNome){
			$this->primeiroNome = $primeiroNome;
		}
		
		public function getprimeiroNome(){
			return $this->primeiroNome;
		}
		
		public function setultimoNome($ultimoNome){
			$this->ultimoNome = $ultimoNome;
		}
		
		public function getultimoNome(){
			return $this->ultimoNome;
		}
		
		
   }
?>