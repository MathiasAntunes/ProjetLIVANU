<?php session_start(); ?>
<?php

header('Location: index.html'); //a voir si on renvoi vers cette page
flush();
if ($_SESSION['SF'] == true or $_SESSION['alim'] == true or $_SESSION['epices'] == true){
	$arrayUser[] = array_merge($_SESSION['PatDate'], $_SESSION['tabRepEpices'], $_SESSION['tabRepSF'], $_SESSION['tabRepAlim']);


	if (file_exists('ReponseQuestionLIVANUT.csv')) {
		$fp = fopen('ReponseQuestionLIVANUT.csv', 'a');
		foreach($arrayUser as $user)
			fputcsv($fp, $user,';');
		}

	else {
		$fp = fopen('ReponseQuestionLIVANUT.csv','a');
		fputcsv($fp, ['Nom','Prenom', 'Date','Score EPICES','EPICES 1','EPICES 2','EPICES 3','EPICES 4','EPICES 5','EPICES 6','EPICES 7','EPICES 8','EPICES 9','EPICES 10','EPICES 11','SF1','SF2','SF3','SF4','SF5','SF6','SF7','SF8','SF9','SF10','SF11','SF12','Pain','Fec','Leg secs','PL','Fruits','LV','Viande oeuf','Poisson','prets','sucres'],';');
		fputcsv($fp, [""]);
		foreach($arrayUser as $user){
			fputcsv($fp, $user,';');
		}
	}
	fclose($fp);
}
?> 

