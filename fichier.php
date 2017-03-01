<?php session_start(); ?>
<?php

header('Location: accueil.php'); //a voir si on renvoi vers cette page
flush();

$arrayUser[] = array_merge($_SESSION['PatDate'], $_SESSION['tabRepEpices'], $_SESSION['tabRepSF'], $_SESSION['tabRepAlim']);


if (file_exists('reponse.csv')) {
	$fp = fopen('reponse.csv', 'a');
	foreach($arrayUser as $user)
		fputcsv($fp, $user,';');
	}

else {
	$fp = fopen('reponse.csv','a');
	fputcsv($fp, ['Nom','Prenom', 'Date','Score EPICES','Reponse1','Reponse2','Reponse3','Reponse4','Reponse5','Reponse6','Reponse7','Reponse8','Reponse9','Reponse10','Reponse11','SF1','SF2','SF3','SF4','SF5','SF6','SF7','SF8','SF9','SF10','SF11','SF12','Pain','Fec','Leg secs','PL','Fruits','LV','Viande oeuf','Poisson','prets','sucres'],';');
	foreach($arrayUser as $user){
		fputcsv($fp, $user,';');
	}
}

fclose($fp);
?> 