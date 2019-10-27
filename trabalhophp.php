<?php

$dt_atual		= date("Y-m-d"); // data atual
$timestamp_dt_atual 	= strtotime($dt_atual); // converte para timestamp Unix
 
$leite = [ 
				["ID"=>1, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"italac"],
				["ID"=>2, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"italac"],
				["ID"=>3, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"BE leite"],
				["ID"=>4, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"Cb leite"],
				["ID"=>5, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"Cristal"],
				["ID"=>6, "DATAVALIDADE"=>"2020-08-09", "MARCA"=>"parmalat"]
        ];

if($timestamp_dt_atual >= $leite.'DATAVALIDADE')
	  echo "tem produto vencido";
 else
	  echo "nao tem produto vencido";	

       
?>