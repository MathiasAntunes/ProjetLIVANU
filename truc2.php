<?php session_start(); ?>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Test question</title>
		<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
		<script src="//cdn.muicss.com/mui-0.9.9/js/mui.min.js"></script>
	</head>
	<body>
		<?php 
			$ques = "Rencontrez-vous parfois un travailleur social ?"; 
			$ques2 = "Bénéficiez-vous d'une assurance maladie complémentaire ?";
			$ques3 = "Vivez-vous en couple ?";
			$ques4 = "Etes-vous propriétaire de votre logement ?";
			$ques5 = "Y-a-t’il des périodes dans le mois où vous rencontrez de réelles difficultés financières à faire face à vos besoins (alimentation, loyer, E.D.F….) ?";
			$ques6 = "Vous est-il arrivé de faire du sport au cours des 12 derniers mois ?";
			$ques7 = "Etes-vous allé au spectacle au cours des 12 dernies mois ?";
			$ques8 = "Etes-vous parti en vacances au cours des 12 derniers mois ?";
			$ques9 = "Au cours des 6 derniers mois, avez-vous eu des contacts avec des membres de votre famille autres que vos parents ou vos enfants ?";
			$ques10 = "En cas de difficultés, y-a-t’il dans votre entourage des personnes sur qui vous puissiez compter pour vous héberger quelques jours en cas de besoin ?";
			$ques11 = "En cas de difficultés, y-a-t’il dans votre entourage des personnes sur qui vous puissiez compter pour vous apporter une aide matérielle ?";
			$tabQues = array ($ques, $ques2, $ques3, $ques4, $ques5, $ques6, $ques7, $ques8, $ques9, $ques10, $ques11);		
			
		?>
		<?php 
			if (isset($_POST['Go']) and ($_POST['selection'] == "epices")) {// si le bouton de départ a été pressé
				$_SESSION['score'] = 75.14;
		?>
		Question 1 :
		<?php
			echo "{$tabQues[0]}"; 
		?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse : </label>
			<input type="submit" value="Oui" name = "Oui1"/>
			<input type="submit" value="Non" name="Non1"/>
		</form>
		
		
		<?php //debut question2
			} elseif (isset($_POST['Non1']) or isset($_POST['Oui1'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
				if (isset($_POST['Non1'])) { //si la précédente réponse a été Non
					$_SESSION['tabRep'][0] = "Non";
				} else { //sinon si c'est Oui
					$_SESSION['tabRep'][0] = "Oui";
					$_SESSION['score'] += 10.06;
				}
		?>
		Question 2 : 
		<?php echo "{$tabQues[1]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui2"/>
			<input type="submit" value="Non" name="Non2"/>
		</form>
		
		
		<?php //debut question3
			} elseif (isset($_POST['Non2']) or isset($_POST['Oui2'])){
				if (isset($_POST['Non2'])) {
					$_SESSION['tabRep'][1] = "Non";
				} else {
					$_SESSION['tabRep'][1] = "Oui";
					$_SESSION['score'] -= 11.83;
				}
		?>
		Question 3 : 
		<?php echo "{$tabQues[2]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui3"/>
			<input type="submit" value="Non" name="Non3"/>
		</form>
		
		
		<?php //debut question4
			} elseif (isset($_POST['Non3']) or isset($_POST['Oui3'])){
				if (isset($_POST['Non3'])) {
					$_SESSION['tabRep'][2] = "Non";
				} else {
					$_SESSION['tabRep'][2] = "Oui";
					$_SESSION['score'] -= 8.28;
				}
		?>
		Question 4 : 
		<?php echo "{$tabQues[3]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui4"/>
			<input type="submit" value="Non" name="Non4"/>
		</form>
		
		
		<?php //debut question5
			} elseif (isset($_POST['Non4']) or isset($_POST['Oui4'])){
				if (isset($_POST['Non4'])) {
					$_SESSION['tabRep'][3] = "Non";
				} else {
					$_SESSION['tabRep'][3] = "Oui";
					$_SESSION['score'] -= 8.28;
				}
		?>
		Question 5 :
		<?php echo "{$tabQues[4]}"; ?>		
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui5"/>
			<input type="submit" value="Non" name="Non5"/>
		</form>
		
		
		<?php //debut question6
			} elseif (isset($_POST['Non5']) or isset($_POST['Oui5'])){
				if (isset($_POST['Non5'])) {
					$_SESSION['tabRep'][4] = "Non";
				} else {
					$_SESSION['tabRep'][4] = "Oui";
					$_SESSION['score'] += 14.8;
				}
		?>
		Question 6 : 
		<?php echo "{$tabQues[5]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui6"/>
			<input type="submit" value="Non" name="Non6"/>
		</form>
		
		
		<?php //debut question7
			} elseif (isset($_POST['Non6']) or isset($_POST['Oui6'])){
				if (isset($_POST['Non6'])) {
					$_SESSION['tabRep'][5] = "Non";
				} else {
					$_SESSION['tabRep'][5] = "Oui";
					$_SESSION['score'] -= 6.51;
				}
		?>
		Question 7 : 
		<?php echo "{$tabQues[6]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui7"/>
			<input type="submit" value="Non" name="Non7"/>
		</form>
		
		
		<?php //debut question8
			} elseif (isset($_POST['Non7']) or isset($_POST['Oui7'])){
				if (isset($_POST['Non7'])) {
					$_SESSION['tabRep'][6] = "Non";
				} else {
					$_SESSION['tabRep'][6] = "Oui";
					$_SESSION['score'] -= 7.10;
				}
		?>
		Question 8 : 
		<?php echo "{$tabQues[7]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui8"/>
			<input type="submit" value="Non" name="Non8"/>
		</form>
		
		
		<?php //debut question9
			} elseif (isset($_POST['Non8']) or isset($_POST['Oui8'])){
				if (isset($_POST['Non8'])) {
					$_SESSION['tabRep'][7] = "Non";
				} else {
					$_SESSION['tabRep'][7] = "Oui";
					$_SESSION['score'] -= 7.10;
				}
		?>
		Question 9 : 
		<?php echo "{$tabQues[8]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui9"/>
			<input type="submit" value="Non" name="Non9"/>
		</form>
		
		
		<?php //debut question10
			} elseif (isset($_POST['Non9']) or isset($_POST['Oui9'])){
				if (isset($_POST['Non9'])) {
					$_SESSION['tabRep'][8] = "Non";
				} else {
					$_SESSION['tabRep'][8] = "Oui";
					$_SESSION['score'] -= 9.47;
				}
		?>
		Question 10 : 
		<?php echo "{$tabQues[9]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui10"/>
			<input type="submit" value="Non" name="Non10"/>
		</form>
		
		
		<?php //debut question11
			} elseif (isset($_POST['Non10']) or isset($_POST['Oui10'])){
				if (isset($_POST['Non10'])) {
					$_SESSION['tabRep'][9] = "Non";
				} else {
					$_SESSION['tabRep'][9] = "Oui";
					$_SESSION['score'] -= 9.47;
				}
		?>
		Question 11 : 
		<?php echo "{$tabQues[10]}"; ?>
		<form id="formulaire" action="truc2.php" method = "post">
			<div>
			<label for "Nom"> Réponse </label>
			<input type="submit" value="Oui" name = "Oui11"/>
			<input type="submit" value="Non" name="Non11"/>
		</form>
		<?php
			} elseif (isset($_POST['Non11']) or isset($_POST['Oui11'])){
				if (isset($_POST['Non11'])) {
					$_SESSION['tabRep'][10] = "Non";
				} else {
					$_SESSION['tabRep'][10] = "Oui";
					$_SESSION['score'] -= 7.10;
				}
		?>
		
		
		Merci d'avoir répondu ! <br>
		<?php 
			$_SESSION['tabRep'][] = $_SESSION['score'];
			print_r ($_SESSION['tabRep']);
		?>
		<form id="formulaire" action="truc.php" method = "post">
			<input type="submit" value="Retour au début" name="Return"/>
		</form>
		<form id="formulaire" action="fichier.php" method = "post">
			<input type="submit" value="Inscrire dans le csv" name="Inscrit"/>
		</form>
		<?php 
			}
		?>
	</body>
</html>