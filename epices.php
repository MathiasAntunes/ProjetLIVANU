<?php session_start(); ?>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>EPICES</title>
			<title>Projet LIVANUT</title>
		<link rel="stylesheet" type="text/css" href="CSS.css" />
	</head>
	<body>
		<?php 
			$ques1 = "Rencontrez-vous parfois un travailleur social ?"; 
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
		
		?>
		<div class="mui--text-display2" align="right"><?php echo $_SESSION['PatDate'][0]; echo " "; echo $_SESSION['PatDate'][1];echo "  ";?></div>
		<div align="right">
			<form id="changePat" action="fichier.php" >
				<input type="submit" name="chPat" value="Changer de patient" class="mui-btn mui-btn--small2 mui-btn--raised 	mui-btn--primary"> 
			</form>
		</div>
		<div class="mui-appbar">
			<table width="100%"  height="142px">
				<tr style="vertical-align:middle;">
					<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Questionnaire EPICES</td>
				</tr>
			</table>
		</div>	
		<div align="center">
			<?php 
				if (!isset($_POST['validation']) or isset($_POST['Prec1'])) {// si le bouton de départ a été pressé, corriger score
					$_SESSION['tabRepEpices'][0] = 75.14;
			?>
			<div align="left">
				<form id="formu" action="accueil.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Retour" name="Prec0epices"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non1"/>
					</div>
				</div>
			</form>
			<?php //debut question2
				} elseif (isset($_POST['Non1']) or isset($_POST['Oui1']) or isset($_POST['Prec2'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante)
					if (isset($_POST['Prec2']) and $_SESSION['tabRepEpices'][1] == "Oui"){
						$_SESSION['tabRepEpices'][0] -= 10.06;
					}
					if (isset($_POST['Non1'])) { //si la précédente réponse a été Non
						$_SESSION['tabRepEpices'][1] = "Non";
					} 
					if (isset($_POST['Oui1'])) { //si c'est Oui
						$_SESSION['tabRepEpices'][1] = "Oui";
						$_SESSION['tabRepEpices'][0] += 10.06;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec1"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non2"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question3
				} elseif (isset($_POST['Non2']) or isset($_POST['Oui2']) or isset($_POST['Prec3'])){
					if (isset($_POST['Prec3']) and $_SESSION['tabRepEpices'][2] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 11.83;
					}
					if (isset($_POST['Non2'])) {
						$_SESSION['tabRepEpices'][2] = "Non";
					} 
					if (isset($_POST['Oui2'])) {
						$_SESSION['tabRepEpices'][2] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 11.83;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec2"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non3"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question4
				} elseif (isset($_POST['Non3']) or isset($_POST['Oui3']) or isset($_POST['Prec4'])){
					if (isset($_POST['Prec4']) and $_SESSION['tabRepEpices'][3] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 8.28;
					}
					if (isset($_POST['Non3'])) {
						$_SESSION['tabRepEpices'][3] = "Non";
					} 
					if (isset($_POST['Oui3'])) {
						$_SESSION['tabRepEpices'][3] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 8.28;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec3"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non4"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question5
				} elseif (isset($_POST['Non4']) or isset($_POST['Oui4']) or isset($_POST['Prec5'])){
					if (isset($_POST['Prec5']) and $_SESSION['tabRepEpices'][4] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 8.28;
					}
					if (isset($_POST['Non4'])) {
						$_SESSION['tabRepEpices'][4] = "Non";
					} 
					if (isset($_POST['Oui4'])) {
						$_SESSION['tabRepEpices'][4] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 8.28;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec4"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non5"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question6
				} elseif (isset($_POST['Non5']) or isset($_POST['Oui5']) or isset($_POST['Prec6'])){
					if (isset($_POST['Prec6']) and $_SESSION['tabRepEpices'][5] == "Oui"){
						$_SESSION['tabRepEpices'][0] -= 14.8;
					}
					if (isset($_POST['Non5'])) {
						$_SESSION['tabRepEpices'][5] = "Non";
					} 
					if (isset($_POST['Oui5'])) {
						$_SESSION['tabRepEpices'][5] = "Oui";
						$_SESSION['tabRepEpices'][0] += 14.8;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec5"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non6"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question7
				} elseif (isset($_POST['Non6']) or isset($_POST['Oui6']) or isset($_POST['Prec7'])){
					if (isset($_POST['Prec7']) and $_SESSION['tabRepEpices'][6] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 6.51;
					}
					if (isset($_POST['Non6'])) {
						$_SESSION['tabRepEpices'][6] = "Non";
					} 
					if (isset($_POST['Oui6'])) {
						$_SESSION['tabRepEpices'][6] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 6.51;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec6"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non7"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question8
				} elseif (isset($_POST['Non7']) or isset($_POST['Oui7']) or isset($_POST['Prec8'])){
					if (isset($_POST['Prec8']) and $_SESSION['tabRepEpices'][7] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 7.10;
					}
					if (isset($_POST['Non7'])) {
						$_SESSION['tabRepEpices'][7] = "Non";
					} 
					if (isset($_POST['Oui7'])) {
						$_SESSION['tabRepEpices'][7] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 7.10;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec7"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non8"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question9
				} elseif (isset($_POST['Non8']) or isset($_POST['Oui8']) or isset($_POST['Prec9'])){
					if (isset($_POST['Prec9']) and $_SESSION['tabRepEpices'][8] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 7.10;
					}
					if (isset($_POST['Non8'])) {
						$_SESSION['tabRepEpices'][8] = "Non";
					} 
					if (isset($_POST['Oui8'])) {
						$_SESSION['tabRepEpices'][8] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 7.10;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec8"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non9"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question10
				} elseif (isset($_POST['Non9']) or isset($_POST['Oui9']) or isset($_POST['Prec10'])){
					if (isset($_POST['Prec10']) and $_SESSION['tabRepEpices'][9] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 9.47;
					}
					if (isset($_POST['Non9'])) {
						$_SESSION['tabRepEpices'][9] = "Non";
					} 
					if (isset($_POST['Oui9'])) {
						$_SESSION['tabRepEpices'][9] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 9.47;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec9"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non10"/>
					</div>
				</div>
			</form>
			
			
			<?php //debut question11
				} elseif (isset($_POST['Non10']) or isset($_POST['Oui10']) or isset($_POST['Prec11'])){
					if (isset($_POST['Prec11']) and $_SESSION['tabRepEpices'][10] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 9.47;
					}
					if (isset($_POST['Non10'])) {
						$_SESSION['tabRepEpices'][10] = "Non";
					} 
					if (isset($_POST['Oui10'])) {
						$_SESSION['tabRepEpices'][10] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 9.47;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec10"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
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
			<form id="formulaire" action="epices.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display1" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name = "Oui11"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="Non11"/>
					</div>
				</div>
			</form>
			
			
			<?php
				} elseif (isset($_POST['Non11']) or isset($_POST['Oui11'])){
					if ($_SESSION['tabRepEpices'][11] == "Oui"){
						$_SESSION['tabRepEpices'][0] += 7.10;
					}
					if (isset($_POST['Non11'])) {
						$_SESSION['tabRepEpices'][11] = "Non";
					}
					if (isset($_POST['Oui11'])) {
						$_SESSION['tabRepEpices'][11] = "Oui";
						$_SESSION['tabRepEpices'][0] -= 7.10;
					}
			?>
			<div align="left">
				<form id="formu" action="epices.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec11"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			Merci d'avoir répondu !
			</div>
			<?php
				$_SESSION['epices'] = true;
			?>
			<form id="formulaire" action="accueil.php" method = "post">
				<div align="center">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Revenir à l'accueil"/>
				</div>
			</form>
			<?php 
				}
			?>
		</div>
	</body>
</html>