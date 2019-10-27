<?php

class Dvd{
	//atributos
	private $codigo;
	private $preco;
	private $titulo;
	private $ano;
	private $estaVencido;
	
	//metodo
	public function setVencido($dtValidade){
	   $this -> dataValidade = $dtValidade;
	}
	public function getVencido(){
	   return $this -> dataValidade;
	}		
}	

class Leite{
	//atributos
	private $codigo;
	private $preco;
	private $marca;
	private $volume;
	private $dataValidade;
	private $estaVencido;
	
	//metodo
	public function setVencido($dtValidade){
	   $this -> dataValidade = $dtValidade;
	}
	public function getVencido(){
	   return $this -> dataValidade;
	}		
}	



$leite = new Produto();
$leite -> codigo = '1';
$leite -> preco = 10;
$leite ->Vencido();

     
?>