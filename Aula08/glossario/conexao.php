<?php
	$servidor="localhost";
	$banco="bdGlossario";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>