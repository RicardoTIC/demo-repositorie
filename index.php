<?php 

	require_once "Clases/Persona.php";
	
	$p1 = new Persona();
	
	$edad = 23;
	$nombre = $p1->setNom("Daniel");
	
	echo "<h1>Titulo del documento </h1>";
	echo "Este es el nombre de la clase Persona " . $p1->getNom() . "<br>";

	$arregloDatos =  array("Nombre"=>"Ricardo","Apellidos"=>"Herrera","Telefono"=>"(656)358-8226");

	foreach($arregloDatos as $rows) {
	
	echo "Estos son los datos de mi arreglo " . $rows ." <br> ";
	echo "============================";
	}


	echo "<p style='color:red;'>El siguiente parentisis es : </p>" . $nombre;
	echo "<p style='color:red;'>El siguiente parentisis es : </p>" . $nombre;

	echo "El comando cls sirve para limpiar nuestra ventana de comando de Windows CMD " . "<br>";
	echo "La edad de este tipo es de  : " .  $edad;

	


?>