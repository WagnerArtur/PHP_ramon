<?php


class Dvd{
	//atributos
	private $codigo;
	private $preco;
	private $titulo;
	private $ano;
	
	//metodo
	public function setCodigo($idcodigo){
	   $this -> codigo = $idcodigo;
	}
	public function getCodigo(){
	   return $this -> codigo;
	}
	public function setPreco($Valor){
	   $this -> preco = $Valor;
	}
	public function getPreco(){
	   return $this -> preco;
	}		
	public function setTitulo($Tit){
	   $this -> titulo = $Tit;
	}
	public function getTitulo(){
	   return $this -> titulo;
	}
	public function setAno($Year){
	   $this -> ano = $Year;
	}
	public function getAno(){
	   return $this -> ano;
	}	
	
	
	public function ImprimeDados(){
		echo 'Codigo:'.$this->getCodigo(). '<br /> 
	       Titulo: '.$this -> getPreco();
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
	public function setCodigo($idcodigo){
	   $this -> codigo = $idcodigo;
	}
	public function getCodigo(){
	   return $this -> codigo;
	}
	public function setPreco($Valor){
	   $this -> preco = $Valor;
	}
	public function getPreco(){
	   return $this -> preco;
	}		
	public function setMarca($Marc){
	   $this -> marca = $Marc;
	}
	public function getMarca(){
	   return $this -> marca;
	}
	public function setVolume($Vol){
	   $this -> volume = $Vol;
	}
	public function getVolume(){
	   return $this -> volume;
	}	
	public function setVencido($dtValidade){
	   $this -> dataValidade = $dtValidade;
	}
	public function getVencido(){
	   return $this -> dataValidade;
	}		
	public function setEstaVencido($dtVal){
	   $this -> estaVencido = $dtVal;
	}
	public function getEstaVencido(){
	   return $this -> estaVencido;
	}		
	
	public function ImprimeDados(){
		echo 'Codigo:'.$this->getCodigo(). '<br /> 
	       Titulo: '.$this -> getPreco();
	}
	public static function ValidaVencimento(){
		
	$dt_atual		= date("Y-m-d"); // data atual
	$timestamp_dt_atual 	= strtotime($dt_atual); // converte para timestamp Unix
		if ($timestamp_dt_atual > $dataValidade) // true
			echo  "Produto com prazo de validade ok";
		else // false
			echo "Produto Vencido";
		}
	
}    
?>