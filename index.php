<?php
	require_once("dvd.class.php");
	$dvds = new Dvd();
	echo "DVD";
	echo "<hr>";
	$dvds -> setCodigo("1");
	$dvds -> setPreco ("10");
	$dvds -> setTitulo("Scrum guide");
	$dvds -> setAno("2015");
	$dvds -> ImprimeDados();

	echo "<hr>";
	
	$dvds -> setCodigo("2");
	$dvds -> setPreco ("10");
	$dvds -> setTitulo("Scrum guide");
	$dvds -> setAno("2015");
	$dvds -> ImprimeDados();

	echo "<hr>";
	
	$dvds -> setCodigo("3");
	$dvds -> setPreco ("10");
	$dvds -> setTitulo("Scrum guide");
	$dvds -> setAno("2015");
	
	$dvds -> ImprimeDados();
	echo "<hr>";
	echo "<hr>";

	$dvds -> getCodigo();
	$dvds -> getPreco ();
	$dvds -> getTitulo();
	$dvds -> getAno();

	
	
	echo "Leite";
	echo "<hr>";

	$leites = new Leite();
	$leites -> setCodigo("1");
	$leites -> setPreco ("10");
	$leites -> setMarca("italac");
	$leites -> setVolume("2");
	$leites -> setVencido ("2001-10-19");
	$leites -> setEstaVencido("T");	
	$leites -> ValidaVencimento();
	$leites -> ImprimeDados();
	
	echo "<hr>";
	
	
	$leites -> setCodigo("2");
	$leites -> setPreco ("10");
	$leites -> setMarca("italac");
	$leites -> setVolume("2");
	$leites -> setVencido ("2001-10-19");
	$leites -> setEstaVencido("T");	
	$leites -> ValidaVencimento();
	$leites -> ImprimeDados();

	echo "<hr>";
	
	
	$leites -> getCodigo();
	$leites -> getPreco();
	$leites -> getMarca();
	$leites -> getVolume();
	$leites -> getVencido();
	$leites -> getEstaVencido();

?>

