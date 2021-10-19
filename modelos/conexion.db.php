<?php

class Conexion {
	
	static public function conectar() {
		
		$link = new PDO("mysql:host=localhost;dbname=bdcovid19cnscb","root","");
		//$link = new PDO("mysql:host=localhost;dbname=bdcovid19cnscbprod","root","");

		$link->exec("set names utf8");

		return $link;

	}

	static public function conectarBDFicha() {
		
		$link = new PDO("mysql:host=localhost;dbname=bdfichaepidemiologicacnscb","root","");
		//$link = new PDO("mysql:host=localhost;dbname=bdfichaepidemiologicacnscbprod","root","");

		$link->exec("set names utf8");

		return $link;

	}

	static public function conectarSQLServer() {
		
		try {
			//$link = new PDO("sqlsrv:Server=172.21.96.11\siais;Database=bdhistoriasclinicas", "sa", "adm");
			//$link = new PDO("sqlsrv:Server=localhost;Database=bdhistoriasclinicas", "sa", "CNS@2021");
			$link = new PDO("sqlsrv:Server=localhost;Database=bdhistoriasclinicas", "sa", "MARKmcp..7880");
	    }
	    catch(PDOException $e) { 
	        die("Error connecting to SQL Server: " . $e->getMessage());
	    }

		$link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		return $link;

	}

}