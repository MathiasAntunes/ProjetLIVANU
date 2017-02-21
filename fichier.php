<?php session_start(); ?>
<?php

header('Location: choix_questionnaire.php');
flush();


$arrayUser[] = $_SESSION['tabRep'];
if (file_exists('reponse.csv')) {
	$fp = fopen('reponse.csv', 'a');
	foreach($arrayUser as $user){
		fputcsv($fp, $user,';');
	}
}
else {
	$fp = fopen('reponse.csv','a');
	fputcsv($fp, ['Reponse1','Reponse2','Reponse3','Reponse4','Reponse5','Reponse6','Reponse7','Reponse8','Reponse9','Reponse10','Reponse11','Score EPICES'],';');
	foreach($arrayUser as $user){
		fputcsv($fp, $user,';');
	}
}

fclose($fp);
?> 