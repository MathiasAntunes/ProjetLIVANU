<?php session_start(); ?>
<?php

header('Location: choix_questionnaire.php');
flush();


$arrayUser[] = $_SESSION['tabRep'];

$fp = fopen('truc1.csv', 'a');

foreach($arrayUser as $user)
{
	fputcsv($fp, $user,';');
}

fclose($fp);
?> 