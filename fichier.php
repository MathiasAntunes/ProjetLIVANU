<?php session_start(); ?>
<?php
//ini_set('memory_limit','512M');
//header("content-type: application/octet-stream");
//header('Content-Type: text/csv; charset=utf-8');
//header("Content-Disposition: attachment; filename=truc1.csv");

header('Location: truc.php');
flush();

//for($i = 0; $i < count($_SESSION['tabRep']); $i++) //Une autre boucle pour tout garder sur une seule ligne au lieu d'une colonne
//{
$arrayUser[] = $_SESSION['tabRep'];
//$arrayUser[] = array($_SESSION['score']);
//}
$fp = fopen('C:\wamp\www\ProjetAnnuelM1\truc1.csv', 'a');

foreach($arrayUser as $user)
{
	fputcsv($fp, $user,',',',',',');
}

fclose($fp);
?> 