<?php

try{
	$base = new PDO('mysql:host=localhost; dbname=bursserver_bd', 'root', '');
	$retour = $base->query("SELECT * FROM tblLED;");
	$x =0;
	while ($data = $retour->fetch()){
	    $Ids[$x] = $data['Id'];
	    $Etats[$x] = $data['Etat'];
	    $Emplacements[$x] = $data['Emplacement'];
	    $x++;
	}
	AfficherLED($Ids,$Emplacements,$Etats,$x); 
} catch(PDOException $e){
echo $e->getMessage();
}
function AfficherLED($Ids,$Emplacements,$Etats,$x){
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
<form action="insert.php" method="get">
    <p>Emplacement de la LED : <input type=text name="Emplacement"></p>
    <p><input type=submit value="Enregistrer"></p>
</form>

