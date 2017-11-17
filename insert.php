<?php

try{
    $Emplacement = $_GET["Emplacement"];
	$base = new PDO('mysql:host=localhost; dbname=bursserver_bd', 'root', '');
	$retour = $base->query("INSERT INTO tblLED(Emplacement,Etat) VALUES ('$Emplacement',0);");
    
	
} catch(PDOException $e){
echo $e->getMessage();
}
  header('Location: index.php');
  exit();
?>
