<?php
echo test;

try{
	$base = new PDO('mysql:host=localhost; dbname=bursserver_bd', 'root', 'Cell79=68');
	$retour = $base->query("SELECT * FROM tblLED;");
	$x =0;
	while ($data = $retour->fetch()){
	    $Ids[$x] = $data['Id'];
	    $Etats[$x] = $data['Etat'];
	    $Emplacements[$x] = $data['Emplacement'];
	    $x++;
	}
	AfficherLED($Ids,$Emplacements,$Etats); 
} catch(PDOException $e){
echo $e->getMessage();
}
function AfficherLED($Ids,$Emplacements,$Etats){
	for($y=0;$y<$x;$y++){
	    $message = ('L\'Id est :'.$Ids[$y].' -L\'emplacement est  :'.$Emplacements[$y].'. -La LED est présentement '.EtatLed($Etats[$y]).'.');
	    echo $message;
	}
}
function EtatLed($etat){
    $retour = 'allumée';
    if ($etat){
        $retour = 'fermée';
    }
    return $retour;
}
?>
