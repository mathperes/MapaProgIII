<?php

abstract class Pessoa{

	public $codigo;
	public $nome;
	private $dataNascimento;

	 public function __construct(){
              $this->codigo ="";
              $this->nome ="";
              $this->dataNascimento ="";
         }
     public function setCodigo($codigo){
     	$this->codigo = (int) $codigo;
     }
     public function getCodigo(){
     	return $this->codigo;
     }
     public function setNome($nome){
     	$this->nome = (string) $nome;
     }
     public function getNome(){
     	return $this->nome;
     }
     public function setDataNascimento($dataNascimento){
     	$this->dataNascimento = $dataNascimento;
     }
     public function getDataNascimento(){
     	return $this->dataNascimento;
     }

    abstract function imprimir();

}
?>