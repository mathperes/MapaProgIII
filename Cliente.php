<?php

include 'Pessoa.php';

class Cliente extends Pessoa{
	
	public $preferencia;

	public function setPreferencia ($preferencia){
		$this->preferencia = (string) $preferencia;
	}

	public function getPreferencia(){
		return $this->preferencia;
	}

		public function __construct(){
              $this->preferencia = "";
              parent::__construct();
              }

	public function imprimir(){
    	echo "Informações do Cliente<br>";
    	echo "Código: ".$this->getCodigo()."<br>";
    	echo "Nome: ".$this->getNome()."<br>";
    	echo "Data de Nascimento: ".$this->getDataNascimento()."<br>";
    	echo "Preferência: ".$this->getPreferencia()."<br>";
    }

}
?>