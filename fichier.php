<?php session_start(); ?>
<?php

header('Location: accueil.php'); //a voir si on renvoi vers cette page
flush();
// à vérifier s'il faut que tous les questionnaire soit remplis sinon faire des if et remplir à la main de case vide pour chaque questionnaire
$arrayUser[] = array_merge($_SESSION['PatDate'], $_SESSION['tabRepEpices'], $_SESSION['tabRepSF']);


if (file_exists('reponse.csv')) {
	$fp = fopen('reponse.csv', 'a');
	foreach($arrayUser as $user)
		fputcsv($fp, $user,';');
	}

else {
	$fp = fopen('reponse.csv','a');
	fputcsv($fp, ['Nom','Prenom', 'Date','Score EPICES','Reponse1','Reponse2','Reponse3','Reponse4','Reponse5','Reponse6','Reponse7','Reponse8','Reponse9','Reponse10','Reponse11'],';');
	foreach($arrayUser as $user){
		fputcsv($fp, $user,';');
	}
}

fclose($fp);
?> 