<?php

include 'Pessoa.php';

class Colaborador extends Pessoa{

	public $setor;
	private $dataAdmissao;
	protected $salario;

	public function __construct(){
		$this->setor ="";
		$this->dataAdmissao ="";
		$this->salario ="";
		parent::__construct();
	}

	public function setSetor($setor){
		$this->setor = (string) $setor;
	}

	public function getSetor(){
		return $this->setor;
	}
	public function setDataAdmissao($dataAdmissao){
		$this->dataAdmissao = $dataAdmissao;
	}
	public function getDataAdmissao(){
		return $this->dataAdmissao;
	}
	public function setSalario($salario){
		$this->salario = (float) $salario;
	}
	public function getSalario(){
		return $this->salario;
	}

	public function imprimir(){
		echo "Informações do Colaborador:<br>";
        echo "Código: " . $this->getCodigo()."<br>";
        echo "Nome: " . $this->getNome()."<br>";
        echo "Data de Nascimento: " . $this->getDataNascimento()."<br>";
        echo "Setor: " . $this->getSetor()."<br>";
        echo "Data de Admissão: " . $this->getDataAdmissao()."<br>";
        echo "Salário: " . $this->getSalario()."<br>";
	}

}
?>