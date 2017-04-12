<?php session_start(); ?>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>SF-12</title>
			<title>Projet LIVANUT</title>
		<link rel="stylesheet" type="text/css" href="CSS.css" />
	</head>
	<body>
		<?php 
			$ques1 = "Dans l'ensemble pensez-vous que votre santé est :"; 
			$ques2 = "En raison de votre état de santé actuel, êtes-vous limité pour des efforts physiques modérés (déplacer une table, passer l’aspirateur, jouer aux boules…) ?";
			$ques3 = "En raison de votre état de santé actuel, êtes-vous limité pour monter plusieurs étages par l’escalier ?";
			$ques4 = "Au cours de ces 4 dernières semaines, et en raison de votre état physique avez-vous accompli moins de choses que vous auriez souhaité ?";
			$ques5 = "Au cours de ces 4 dernières semaines, et en raison de votre état physique avez-vous été limité pour faire certaines choses ?";
			$ques6 = "Au cours de ces 4 dernières semaines, et en raison de votre état émotionnel (comme vous sentir triste, nerveux ou déprimé), avez-vous accompli moins de choses que vous auriez souhaité ?";
			$ques7 = "Au cours de ces 4 dernières semaines, et en raison de votre état émotionnel (comme vous sentir triste, nerveux ou déprimé), avez-vous eu des difficultés à faire ce que vous aviez à faire avec autant de soin et d’attention que d’habitude ?";
			$ques8 = "Au cours de ces 4 dernières semaines, dans quelle mesure vos douleurs physiques vous ont-elles limité dans votre travail ou vos activités domestiques ?";
			$ques9 = "Au cours de ces 4 dernières semaines, y a t-il eu des moments où vous vous êtes senti calme et détendu ?";
			$ques10 = "Au cours de ces 4 dernières semaines, y a t-il eu des moments où vous vous êtes senti débordant d’énergie ?";
			$ques11 = "Au cours de ces 4 dernières semaines, y a t-il eu des moments où vous vous êtes senti triste et abattu ?";
			$ques12 = "Au cours de ces 4 dernières semaines, y a t-il eu des moments où votre état de santé physique ou émotionnel vous a gêné dans votre vie sociale et vos relations avec les autres, votre famille, vos amis, vos connaissances ?";		
		
		?>
		<div class="mui--text-display2" align="right"><?php echo $_SESSION['PatDate'][0]; echo " "; echo $_SESSION['PatDate'][1];echo "  ";?></div>
		<div align="right">
			<form id="changePat" action="index.html" >
				<input type="submit" name="chPat" value="Changer de patient" class="mui-btn mui-btn--small mui-btn--raised 	mui-btn--primary"> 
			</form>
		</div>
		<div class="mui-appbar">
			<table width="100%">
				<tr style="vertical-align:middle;">
					<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Questionnaire SF-12</td>
				</tr>
			</table>
		</div>			
		<div align="center">
			<?php 
				if (!isset($_POST['validation']) or isset($_POST['prec1'])) {// si le bouton de départ a été pressé
					//$_SESSION['score'] = 75.14;
			?>
			<div align="left">
				<form id="formu" action="accueil.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Retour" name="Prec0SF"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 1 :

			<?php
				echo "$ques1"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Excellente" name = "Exce1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Très bonne" name = "TB1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Bonne" name = "B1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Médiocre" name = "Méd1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Mauvaise" name="Mauv1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question2
				} elseif (isset($_POST['Exce1']) or isset($_POST['TB1']) or isset($_POST['B1']) or isset($_POST['Méd1']) or isset($_POST['Mauv1']) or isset($_POST['prec2'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['Exce1'])) { 
						$_SESSION['tabRepSF'][0] = "Excellente";
					} elseif (isset($_POST['TB1'])) { 
						$_SESSION['tabRepSF'][0] = "Tres bien";
					} elseif (isset($_POST['B1'])) { 
						$_SESSION['tabRepSF'][0] = "Bien";
					} elseif (isset($_POST['Méd1'])) { 
						$_SESSION['tabRepSF'][0] = "Mediocre";
					} elseif (isset($_POST['Mauv1'])) { 
						$_SESSION['tabRepSF'][0] = "Mauvaise";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec1"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 2 :

			<?php
				echo "$ques2"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui, beaucoup limité" name = "Oui,bcp2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui un peu limité" name = "Oui,peu2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non, pas du tout limité" name = "Non2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question3
				} elseif (isset($_POST['Oui,bcp2']) or isset($_POST['Oui,peu2']) or isset($_POST['Non2']) or isset($_POST['prec3'])){
					if (isset($_POST['Non2'])) {
						$_SESSION['tabRepSF'][1] = "Non, pas du tout limite";
					} elseif (isset($_POST['Oui,bcp2'])) {
						$_SESSION['tabRepSF'][1] = "Oui, beaucoup limite";
						//$_SESSION['score'] -= 11.83;
					} elseif (isset($_POST['Oui,peu2'])) {
						$_SESSION['tabRepSF'][1] = "Oui, un peu limite";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec2"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 3 :

			<?php
				echo "$ques3"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui, beaucoup limité" name = "Oui,bcp3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui un peu limité" name = "Oui,peu3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non, pas du tout limité" name = "Non3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question4
				} elseif (isset($_POST['Oui,bcp3']) or isset($_POST['Oui,peu3']) or isset($_POST['Non3']) or isset($_POST['prec4'])){
					if (isset($_POST['Non3'])) {
						$_SESSION['tabRepSF'][2] = "Non, pas du tout limite";
					} elseif (isset($_POST['Oui,bcp3'])) {
						$_SESSION['tabRepSF'][2] = "Oui, beaucoup limite";
						//$_SESSION['score'] -= 11.83;
					} elseif (isset($_POST['Oui,peu3'])) {
						$_SESSION['tabRepSF'][2] = "Oui, un peu limite";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec3"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 4 :

			<?php
				echo "$ques4"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 5
				} elseif (isset($_POST['tjrs4']) or isset($_POST['plupart4']) or isset($_POST['svt4']) or isset($_POST['prf4']) or isset($_POST['jms4']) or isset($_POST['prec5'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs4'])) { 
						$_SESSION['tabRepSF'][3] = "Toujours";
					} elseif (isset($_POST['plupart4'])) { 
						$_SESSION['tabRepSF'][3] = "La plupart du temps";
					} elseif (isset($_POST['svt4'])) { 
						$_SESSION['tabRepSF'][3] = "Souvent";
					} elseif (isset($_POST['prf4'])) { 
						$_SESSION['tabRepSF'][3] = "Parfois";
					} elseif (isset($_POST['jms4'])) { 
						$_SESSION['tabRepSF'][3] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec4"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 5 :

			<?php
				echo "$ques5"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>		
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 6
				} elseif (isset($_POST['tjrs5']) or isset($_POST['plupart5']) or isset($_POST['svt5']) or isset($_POST['prf5']) or isset($_POST['jms5']) or isset($_POST['prec6'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs5'])) { 
						$_SESSION['tabRepSF'][4] = "Toujours";
					} elseif (isset($_POST['plupart5'])) { 
						$_SESSION['tabRepSF'][4] = "La plupart du temps";
					} elseif (isset($_POST['svt5'])) { 
						$_SESSION['tabRepSF'][4] = "Souvent";
					} elseif (isset($_POST['prf5'])) { 
						$_SESSION['tabRepSF'][4] = "Parfois";
					} elseif (isset($_POST['jms5'])) { 
						$_SESSION['tabRepSF'][4] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec5"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 6 :

			<?php
				echo "$ques6"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 7
				} elseif (isset($_POST['tjrs6']) or isset($_POST['plupart6']) or isset($_POST['svt6']) or isset($_POST['prf6']) or isset($_POST['jms6']) or isset($_POST['prec7'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs6'])) { 
						$_SESSION['tabRepSF'][5] = "Toujours";
					} elseif (isset($_POST['plupart6'])) { 
						$_SESSION['tabRepSF'][5] = "La plupart du temps";
					} elseif (isset($_POST['svt6'])) { 
						$_SESSION['tabRepSF'][5] = "Souvent";
					} elseif (isset($_POST['prf6'])) { 
						$_SESSION['tabRepSF'][5] = "Parfois";
					} elseif (isset($_POST['jms6'])) { 
						$_SESSION['tabRepSF'][5] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec6"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 7 :

			<?php
				echo "$ques7"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 8
				} elseif (isset($_POST['tjrs7']) or isset($_POST['plupart7']) or isset($_POST['svt7']) or isset($_POST['prf7']) or isset($_POST['jms7']) or isset($_POST['prec8'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs7'])) { 
						$_SESSION['tabRepSF'][6] = "Toujours";
					} elseif (isset($_POST['plupart7'])) { 
						$_SESSION['tabRepSF'][6] = "La plupart du temps";
					} elseif (isset($_POST['svt7'])) { 
						$_SESSION['tabRepSF'][6] = "Souvent";
					} elseif (isset($_POST['prf7'])) { 
						$_SESSION['tabRepSF'][6] = "Parfois";
					} elseif (isset($_POST['jms7'])) { 
						$_SESSION['tabRepSF'][6] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec7"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 8 :

			<?php
				echo "$ques8"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Pas du tout" name = "pdt8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Un petit peu" name = "petit8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Moyennement" name = "moy8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Beaucoup" name = "bcp8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Enormément" name="enorm8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 9
				} elseif (isset($_POST['pdt8']) or isset($_POST['petit8']) or isset($_POST['moy8']) or isset($_POST['bcp8']) or isset($_POST['enorm8']) or isset($_POST['prec9'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['pdt8'])) { 
						$_SESSION['tabRepSF'][7] = "Pas du tout";
					} elseif (isset($_POST['petit8'])) { 
						$_SESSION['tabRepSF'][7] = "Un petit peu";
					} elseif (isset($_POST['moy8'])) { 
						$_SESSION['tabRepSF'][7] = "Moyennement";
					} elseif (isset($_POST['bcp8'])) { 
						$_SESSION['tabRepSF'][7] = "Beaucoup";
					} elseif (isset($_POST['enorm8'])) { 
						$_SESSION['tabRepSF'][7] = "Enormement";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec8"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 9 :

			<?php
				echo "$ques9"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 10
				} elseif (isset($_POST['tjrs9']) or isset($_POST['plupart9']) or isset($_POST['svt9']) or isset($_POST['prf9']) or isset($_POST['jms9']) or isset($_POST['prec10'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs9'])) { 
						$_SESSION['tabRepSF'][8] = "Toujours";
					} elseif (isset($_POST['plupart9'])) { 
						$_SESSION['tabRepSF'][8] = "La plupart du temps";
					} elseif (isset($_POST['svt9'])) { 
						$_SESSION['tabRepSF'][8] = "Souvent";
					} elseif (isset($_POST['prf9'])) { 
						$_SESSION['tabRepSF'][8] = "Parfois";
					} elseif (isset($_POST['jms9'])) { 
						$_SESSION['tabRepSF'][8] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec9"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 10 :

			<?php
				echo "$ques10"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 11
				} elseif (isset($_POST['tjrs10']) or isset($_POST['plupart10']) or isset($_POST['svt10']) or isset($_POST['prf10']) or isset($_POST['jms10']) or isset($_POST['prec11'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs10'])) { 
						$_SESSION['tabRepSF'][9] = "Toujours";
					} elseif (isset($_POST['plupart10'])) { 
						$_SESSION['tabRepSF'][9] = "La plupart du temps";
					} elseif (isset($_POST['svt10'])) { 
						$_SESSION['tabRepSF'][9] = "Souvent";
					} elseif (isset($_POST['prf10'])) { 
						$_SESSION['tabRepSF'][9] = "Parfois";
					} elseif (isset($_POST['jms10'])) { 
						$_SESSION['tabRepSF'][9] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec10"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 11 :

			<?php
				echo "$ques11"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut question 12
				} elseif (isset($_POST['tjrs11']) or isset($_POST['plupart11']) or isset($_POST['svt11']) or isset($_POST['prf11']) or isset($_POST['jms11']) or isset($_POST['prec12'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs11'])) { 
						$_SESSION['tabRepSF'][10] = "Toujours";
					} elseif (isset($_POST['plupart11'])) { 
						$_SESSION['tabRepSF'][10] = "La plupart du temps";
					} elseif (isset($_POST['svt11'])) { 
						$_SESSION['tabRepSF'][10] = "Souvent";
					} elseif (isset($_POST['prf11'])) { 
						$_SESSION['tabRepSF'][10] = "Parfois";
					} elseif (isset($_POST['jms11'])) { 
						$_SESSION['tabRepSF'][10] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec11"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Question 12 :

			<?php
				echo "$ques12"; 
			?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="SF-12.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Toujours" name = "tjrs12"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="La plupart du temps" name = "plupart12"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Souvent" name = "svt12"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Parfois" name = "prf12"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms12"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php //debut fin
				} elseif (isset($_POST['tjrs12']) or isset($_POST['plupart12']) or isset($_POST['svt12']) or isset($_POST['prf12']) or isset($_POST['jms12']) or isset($_POST['prec13'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['tjrs12'])) { 
						$_SESSION['tabRepSF'][11] = "Toujours";
					} elseif (isset($_POST['plupart12'])) { 
						$_SESSION['tabRepSF'][11] = "La plupart du temps";
					} elseif (isset($_POST['svt12'])) { 
						$_SESSION['tabRepSF'][11] = "Souvent";
					} elseif (isset($_POST['prf12'])) { 
						$_SESSION['tabRepSF'][11] = "Parfois";
					} elseif (isset($_POST['jms12'])) { 
						$_SESSION['tabRepSF'][11] = "Jamais";
					}
			?>
			<div align="left">
				<form id="formu" action="SF-12.php" method="post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec12"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Merci d'avoir répondu !
			</div>
			<?php 
				$_SESSION['SF'] = true;
			?>
			<form id="formulaire" action="accueil.php" method = "post">
				<div align="center">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Changer de questionnaire" />
				</div>
			</form>
			<form id="formulaire" action="fichier.php" method = "post">
				<div align="center">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Enregistrer les réponses" name = "Enregistre"/>
				</div>
			</form>
			<?php 
				}
			?>
		</div>
	</body>
</html>