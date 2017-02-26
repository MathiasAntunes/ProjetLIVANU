<?php session_start(); ?>
<?php

header('Location: choix_questionnaire.php'); //a voir si on renvoi vers cette page
flush();


$arrayUser[] = $_SESSION['tabRep'];

$fp = fopen('truc1.csv', 'a');

foreach($arrayUser as $user)
{
	fputcsv($fp, $user,';');
}

fclose($fp);
?> 