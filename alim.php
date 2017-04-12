<?php session_start(); ?>
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>ALIMENTATION</title>
			<title>Projet LIVANUT</title>
		<link rel="stylesheet" type="text/css" href="CSS.css" />
	</head>
	<body>
		<?php //déclaration question
			$ques1 = "Habituellement, mangez-vous du pain, des biscottes ou des céréales du type « petit déjeuner » chaque jour ?"; 
			$ques2 = "Habituellement, mangez-vous du riz, des pâtes, des pommes de terre, de la semoule ou du maïs chaque jour ?";
			$ques3 = "Habituellement, mangez-vous des légumes secs (haricots secs, lentilles, pois chiches etc.) chaque semaine ?";
			$ques4 = "Habituellement, mangez-vous des produits laitiers chaque jour ?";
			$ques5 = "Habituellement, consommez-vous des fruits (y compris des jus de fruits 100% pur jus) chaque jour ?";
			$ques6 = "Habituellement, mangez-vous des légumes (sans compter les pommes de terre et les légumes secs) chaque jour ?";
			$ques7 = "Habituellement, mangez-vous de la viande, de la volaille, du jambon ou des oeufs chaque jour ?";
			$ques8 = "Habituellement, mangez-vous du poisson ou d’autres produits de la pêche chaque semaine ?";
			$ques9 = "Habituellement, mangez-vous des plats prêts à consommer (ou plats « préparés ») qu’ils soient frais, surgelés ou en conserve chaque jour?";
			$ques10 = "Habituellement, mangez-vous des produits sucrés comme des gâteaux, des barres chocolatées, des pâtisseries, des viennoiseries, des crèmes dessert, chaque jour (sans compter les boissons sucrées)?";
			$ques11 = "Combien de fois en mangez-vous par jour ?";
			$ques12 = "Combien de fois en mangez-vous ?";	
		
		//déclaration complément question
			$compl1 = "Ce groupe comprend le pain, les biscottes sous toutes leurs formes et les céréales de petit déjeuner.";
			$compl2 = "Ce groupe comprend aussi le blé, la purée lyophilisée, les raviolis, lasagnes, hachis-Parmentier, gratins dauphinois, etc. et tous les plats cuisinés à base de riz, pâtes, pomme de terre ou semoule.";
			$compl3 = "Ce groupe comprend tous les légumes secs (pois chiches, pois cassés, flageolets, maïs, lentilles, haricots blancs, rouges, fèves) et les préparations à base de légumes secs (saucisses lentilles, couscous si il y a des pois chiches, etc.).";
			$compl4 = "Cette section comprend le lait (aromatisé ou nature), les fromages, les yaourts (nature ou aux fruits), le fromage blanc et les petits suisses. Les desserts lactés tels que les crèmes dessert ou les flans, ainsi que les yaourts à boire, sont compris dans les produits sucrés (question 3.10) à cause de leur teneur en sucre et en matière grasse et ne sont pas inclus dans cette question.";
			$compl5 = "Cette section comprend les fruits sous toute leur forme (crus ou cuits, en compote, en conserve, surgelés, au sirop, soupes, etc.). Les jus de fruits 100% pur jus ou sans sucre ajouté, les tartes et les gâteaux à base de fruits sont compris dans cette catégorie. Ne sont pas compris les nectars, « boissons à base fruits », etc.";
			$compl6 = "Cette section comprend les légumes sous toute leur forme (purée, en conserve, surgelés, soupes, tartes, etc.), qu’ils soient crus ou cuits. La sauce tomate fait partie de cette catégorie, mais pas les pommes de terre.";
			$compl7 = "Cette catégorie comprend toutes les viandes, les oeufs sous toute leur forme, les abats, etc. Pour le jambon, cette question ne concerne que le jambon blanc (jambon cuit). Le reste de la charcuterie (le jambon cru, les saucisses, rillettes, pâtés, saucisson etc.) n’est pas compris dans cette catégorie.";
			$compl8 = "Cette catégorie comprend le poisson sous toutes ses formes (dont le poisson en conserve, le poisson pané) et les fruits de mer. N’oubliez pas toutes les préparations à base de fruits de mer dans cette catégorie (tartes aux fruits de mer, bouchées à la reine aux fruits de mers, etc.)";
			$compl9 = "Cette catégorie comprend par exemple les pizzas, les barquettes préparées, sous vide ou congelées, les cassoulets en conserve, les plats achetés chez le traiteur ainsi que ceux achetés en fast-food et rapportés à la maison, etc.";
			$compl10 = "Cette catégorie comprend tous les produits sucrés quelque soit leur forme (par exemple : confiserie, barre chocolatée, flans, pain au raisin, mousse au chocolat, etc.) et leur provenance (commerce ou fait maison).";
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
					<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Questionnaire ALIMENTATION</td>
				</tr>
			</table>
		</div>			
		<div align="center">
			<?php 
				if (!isset($_POST['validation']) or isset($_POST['Prec1']) or isset($_POST['Prec2'])) {// si le bouton de départ a été pressé
					//$_SESSION['score'] = 75.14;
			?>
			<div align="left">
				<form id="formu" action="accueil.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Retour" name="Prec0alim"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 1 :
				<br>
				<?php
					echo "$ques1";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl1";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non1"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui1']) or isset($_POST['non1'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec1"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui1'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non1'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms1"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois1']) or isset($_POST['2fois1']) or isset($_POST['3fois1']) or isset($_POST['4fois1']) or isset($_POST['4sem1']) or isset($_POST['2sem1']) or isset($_POST['1sem1']) or isset($_POST['jms1']) or isset($_POST['Prec3']) or isset($_POST['Prec4'])) {
					if (isset($_POST['1fois1'])) {
						$_SESSION['tabRepAlim'][0] = "1";
					} elseif (isset($_POST['2fois1'])) {
						$_SESSION['tabRepAlim'][0] = "2";
					} elseif (isset($_POST['3fois1'])) {
						$_SESSION['tabRepAlim'][0] = "3";
					} elseif (isset($_POST['4fois1'])) {
						$_SESSION['tabRepAlim'][0] = "4";
					} elseif (isset($_POST['4sem1'])) {
						$_SESSION['tabRepAlim'][0] = "5";
					} elseif (isset($_POST['2sem1'])) {
						$_SESSION['tabRepAlim'][0] = "6";
					} elseif (isset($_POST['1sem1'])) {
						$_SESSION['tabRepAlim'][0] = "7";
					} elseif (isset($_POST['jms1'])) {
						$_SESSION['tabRepAlim'][0] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec2"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 2 :
				<br>
				<?php
					echo "$ques2";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl2";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non2"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui2']) or isset($_POST['non2'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec3"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui2'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non2'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms2"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois2']) or isset($_POST['2fois2']) or isset($_POST['3fois2']) or isset($_POST['4fois2']) or isset($_POST['4sem2']) or isset($_POST['2sem2']) or isset($_POST['1sem2']) or isset($_POST['jms2']) or isset($_POST['Prec5']) or isset($_POST['Prec6'])) {
					if (isset($_POST['1fois2'])) {
						$_SESSION['tabRepAlim'][1] = "1";
					} elseif (isset($_POST['2fois2'])) {
						$_SESSION['tabRepAlim'][1] = "2";
					} elseif (isset($_POST['3fois2'])) {
						$_SESSION['tabRepAlim'][1] = "3";
					} elseif (isset($_POST['4fois2'])) {
						$_SESSION['tabRepAlim'][1] = "4";
					} elseif (isset($_POST['4sem2'])) {
						$_SESSION['tabRepAlim'][1] = "5";
					} elseif (isset($_POST['2sem2'])) {
						$_SESSION['tabRepAlim'][1] = "6";
					} elseif (isset($_POST['1sem2'])) {
						$_SESSION['tabRepAlim'][1] = "7";
					} elseif (isset($_POST['jms2'])) {
						$_SESSION['tabRepAlim'][1] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec4"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 3 :
				<br>
				<?php
					echo "$ques3";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl3";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non3"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui3']) or isset($_POST['non3'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec5"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui3'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non3'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms3"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois3']) or isset($_POST['2fois3']) or isset($_POST['3fois3']) or isset($_POST['4fois3']) or isset($_POST['4sem3']) or isset($_POST['2sem3']) or isset($_POST['1sem3']) or isset($_POST['jms3']) or isset($_POST['Prec7']) or isset($_POST['Prec8'])) {
					if (isset($_POST['1fois3'])) {
						$_SESSION['tabRepAlim'][2] = "1";
					} elseif (isset($_POST['2fois3'])) {
						$_SESSION['tabRepAlim'][2] = "2";
					} elseif (isset($_POST['3fois3'])) {
						$_SESSION['tabRepAlim'][2] = "3";
					} elseif (isset($_POST['4fois3'])) {
						$_SESSION['tabRepAlim'][2] = "4";
					} elseif (isset($_POST['4sem3'])) {
						$_SESSION['tabRepAlim'][2] = "5";
					} elseif (isset($_POST['2sem3'])) {
						$_SESSION['tabRepAlim'][2] = "6";
					} elseif (isset($_POST['1sem3'])) {
						$_SESSION['tabRepAlim'][2] = "7";
					} elseif (isset($_POST['jms3'])) {
						$_SESSION['tabRepAlim'][2] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec6"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 4 :
				<br>
				<?php
					echo "$ques4";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl4";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non4"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui4']) or isset($_POST['non4'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec7"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui4'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non4'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms4"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois4']) or isset($_POST['2fois4']) or isset($_POST['3fois4']) or isset($_POST['4fois4']) or isset($_POST['4sem4']) or isset($_POST['2sem4']) or isset($_POST['1sem4']) or isset($_POST['jms4']) or isset($_POST['Prec9']) or isset($_POST['Prec10'])) {
					if (isset($_POST['1fois4'])) {
						$_SESSION['tabRepAlim'][3] = "1";
					} elseif (isset($_POST['2fois4'])) {
						$_SESSION['tabRepAlim'][3] = "2";
					} elseif (isset($_POST['3fois4'])) {
						$_SESSION['tabRepAlim'][3] = "3";
					} elseif (isset($_POST['4fois4'])) {
						$_SESSION['tabRepAlim'][3] = "4";
					} elseif (isset($_POST['4sem4'])) {
						$_SESSION['tabRepAlim'][3] = "5";
					} elseif (isset($_POST['2sem4'])) {
						$_SESSION['tabRepAlim'][3] = "6";
					} elseif (isset($_POST['1sem4'])) {
						$_SESSION['tabRepAlim'][3] = "7";
					} elseif (isset($_POST['jms4'])) {
						$_SESSION['tabRepAlim'][3] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec8"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 5 :
				<br>
				<?php
					echo "$ques5";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl5";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non5"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui5']) or isset($_POST['non5'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec9"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui5'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non5'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms5"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois5']) or isset($_POST['2fois5']) or isset($_POST['3fois5']) or isset($_POST['4fois5']) or isset($_POST['4sem5']) or isset($_POST['2sem5']) or isset($_POST['1sem5']) or isset($_POST['jms5']) or isset($_POST['Prec11']) or isset($_POST['Prec12'])) {
					if (isset($_POST['1fois5'])) {
						$_SESSION['tabRepAlim'][4] = "1";
					} elseif (isset($_POST['2fois5'])) {
						$_SESSION['tabRepAlim'][4] = "2";
					} elseif (isset($_POST['3fois5'])) {
						$_SESSION['tabRepAlim'][4] = "3";
					} elseif (isset($_POST['4fois5'])) {
						$_SESSION['tabRepAlim'][4] = "4";
					} elseif (isset($_POST['4sem5'])) {
						$_SESSION['tabRepAlim'][4] = "5";
					} elseif (isset($_POST['2sem5'])) {
						$_SESSION['tabRepAlim'][4] = "6";
					} elseif (isset($_POST['1sem5'])) {
						$_SESSION['tabRepAlim'][4] = "7";
					} elseif (isset($_POST['jms5'])) {
						$_SESSION['tabRepAlim'][4] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec10"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 6 :
				<br>
				<?php
					echo "$ques6";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl6";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non6"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui6']) or isset($_POST['non6'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec11"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui6'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non6'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms6"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}
				} elseif (isset($_POST['1fois6']) or isset($_POST['2fois6']) or isset($_POST['3fois6']) or isset($_POST['4fois6']) or isset($_POST['4sem6']) or isset($_POST['2sem6']) or isset($_POST['1sem6']) or isset($_POST['jms6']) or isset($_POST['Prec13']) or isset($_POST['Prec14'])) {
					if (isset($_POST['1fois6'])) {
						$_SESSION['tabRepAlim'][5] = "1";
					} elseif (isset($_POST['2fois6'])) {
						$_SESSION['tabRepAlim'][5] = "2";
					} elseif (isset($_POST['3fois6'])) {
						$_SESSION['tabRepAlim'][5] = "3";
					} elseif (isset($_POST['4fois6'])) {
						$_SESSION['tabRepAlim'][5] = "4";
					} elseif (isset($_POST['4sem6'])) {
						$_SESSION['tabRepAlim'][5] = "5";
					} elseif (isset($_POST['2sem6'])) {
						$_SESSION['tabRepAlim'][5] = "6";
					} elseif (isset($_POST['1sem6'])) {
						$_SESSION['tabRepAlim'][5] = "7";
					} elseif (isset($_POST['jms6'])) {
						$_SESSION['tabRepAlim'][5] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec12"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 7 :
				<br>
				<?php
					echo "$ques7";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl7";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non7"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui7']) or isset($_POST['non7'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec13"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui7'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non7'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms7"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}		
				} elseif (isset($_POST['1fois7']) or isset($_POST['2fois7']) or isset($_POST['3fois7']) or isset($_POST['4fois7']) or isset($_POST['4sem7']) or isset($_POST['2sem7']) or isset($_POST['1sem7']) or isset($_POST['jms7']) or isset($_POST['Prec15']) or isset($_POST['Prec16'])) {
					if (isset($_POST['1fois7'])) {
						$_SESSION['tabRepAlim'][6] = "1";
					} elseif (isset($_POST['2fois7'])) {
						$_SESSION['tabRepAlim'][6] = "2";
					} elseif (isset($_POST['3fois7'])) {
						$_SESSION['tabRepAlim'][6] = "3";
					} elseif (isset($_POST['4fois7'])) {
						$_SESSION['tabRepAlim'][6] = "4";
					} elseif (isset($_POST['4sem7'])) {
						$_SESSION['tabRepAlim'][6] = "5";
					} elseif (isset($_POST['2sem7'])) {
						$_SESSION['tabRepAlim'][6] = "6";
					} elseif (isset($_POST['1sem7'])) {
						$_SESSION['tabRepAlim'][6] = "7";
					} elseif (isset($_POST['jms7'])) {
						$_SESSION['tabRepAlim'][6] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec14"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 8 :
				<br>
				<?php
					echo "$ques8";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl8";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non8"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui8']) or isset($_POST['non8'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec15"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui8'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non8'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms8"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}	
				} elseif (isset($_POST['1fois8']) or isset($_POST['2fois8']) or isset($_POST['3fois8']) or isset($_POST['4fois8']) or isset($_POST['4sem8']) or isset($_POST['2sem8']) or isset($_POST['1sem8']) or isset($_POST['jms8']) or isset($_POST['Prec17']) or isset($_POST['Prec18'])) {
					if (isset($_POST['1fois8'])) {
						$_SESSION['tabRepAlim'][7] = "1";
					} elseif (isset($_POST['2fois8'])) {
						$_SESSION['tabRepAlim'][7] = "2";
					} elseif (isset($_POST['3fois8'])) {
						$_SESSION['tabRepAlim'][7] = "3";
					} elseif (isset($_POST['4fois8'])) {
						$_SESSION['tabRepAlim'][7] = "4";
					} elseif (isset($_POST['4sem8'])) {
						$_SESSION['tabRepAlim'][7] = "5";
					} elseif (isset($_POST['2sem8'])) {
						$_SESSION['tabRepAlim'][7] = "6";
					} elseif (isset($_POST['1sem8'])) {
						$_SESSION['tabRepAlim'][7] = "7";
					} elseif (isset($_POST['jms8'])) {
						$_SESSION['tabRepAlim'][7] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec16"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 9 :
				<br>
				<?php
					echo "$ques9";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl9";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non9"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui9']) or isset($_POST['non9'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec17"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui9'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non9'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms9"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}	
				} elseif (isset($_POST['1fois9']) or isset($_POST['2fois9']) or isset($_POST['3fois9']) or isset($_POST['4fois9']) or isset($_POST['4sem9']) or isset($_POST['2sem9']) or isset($_POST['1sem9']) or isset($_POST['jms9']) or isset($_POST['Prec19']) or isset($_POST['Prec20'])) {
					if (isset($_POST['1fois9'])) {
						$_SESSION['tabRepAlim'][8] = "1";
					} elseif (isset($_POST['2fois9'])) {
						$_SESSION['tabRepAlim'][8] = "2";
					} elseif (isset($_POST['3fois9'])) {
						$_SESSION['tabRepAlim'][8] = "3";
					} elseif (isset($_POST['4fois9'])) {
						$_SESSION['tabRepAlim'][8] = "4";
					} elseif (isset($_POST['4sem9'])) {
						$_SESSION['tabRepAlim'][8] = "5";
					} elseif (isset($_POST['2sem9'])) {
						$_SESSION['tabRepAlim'][8] = "6";
					} elseif (isset($_POST['1sem9'])) {
						$_SESSION['tabRepAlim'][8] = "7";
					} elseif (isset($_POST['jms9'])) {
						$_SESSION['tabRepAlim'][8] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec18"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
				<br>
				<br>
				<br>
				<br>
				Question 10 :
				<br>
				<?php
					echo "$ques10";
				?>
			</div>
			<div class="mui--text-display1">
				<?php
					echo "$compl10";
				?>
			</div>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="alim.php" method = "post">
				<div align="center">
					<div>
						<label  class="mui--text-display2" for "Nom"> Réponse : </label>
					</div>
					<br>
					<div>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Oui" name="oui10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Non" name="non10"/>
						<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
					</div>
				</div>
			</form>
			<?php
				} elseif (isset($_POST['oui10']) or isset($_POST['non10'])) { //si sur la question précédente un des boutons a été pressé (passage à la question suivante) ?>
					<div align="left">
						<form id="formu" action="alim.php" method="post">
							<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec19"/>
							<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
						</form>
					</div>
					<?php if (isset($_POST['oui10'])) { ?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques11";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois" name="1fois10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 fois" name="2fois10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="3 fois" name="3fois10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 fois et plus" name="4fois10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
				<?php 
					} elseif (isset($_POST['non10'])) { 
				?>
						<div class="mui--text-display2">
							<br>
							<br>
							<br>
							<br>
							<?php
								echo "$ques12";
							?>
						</div>
						<br>
						<br>
						<br>
						<br>
						<form id="formulaire" action="alim.php" method = "post">
							<div align="center">
								<div>
									<label  class="mui--text-display2" for "Nom"> Réponse : </label>
								</div>
								<br>
								<div>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="4 à 6 fois par semaine" name="4sem10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="2 à 3 fois par semaine" name="2sem10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="1 fois par semaine au moins" name="1sem10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Jamais" name="jms10"/>
									<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
								</div>
							</div>
						</form>
			<?php	}	
				} elseif (isset($_POST['1fois10']) or isset($_POST['2fois10']) or isset($_POST['3fois10']) or isset($_POST['4fois10']) or isset($_POST['4sem10']) or isset($_POST['2sem10']) or isset($_POST['1sem10']) or isset($_POST['jms10'])) {
					if (isset($_POST['1fois10'])) {
						$_SESSION['tabRepAlim'][9] = "1";
					} elseif (isset($_POST['2fois10'])) {
						$_SESSION['tabRepAlim'][9] = "2";
					} elseif (isset($_POST['3fois10'])) {
						$_SESSION['tabRepAlim'][9] = "3";
					} elseif (isset($_POST['4fois10'])) {
						$_SESSION['tabRepAlim'][9] = "4";
					} elseif (isset($_POST['4sem10'])) {
						$_SESSION['tabRepAlim'][9] = "5";
					} elseif (isset($_POST['2sem10'])) {
						$_SESSION['tabRepAlim'][9] = "6";
					} elseif (isset($_POST['1sem10'])) {
						$_SESSION['tabRepAlim'][9] = "7";
					} elseif (isset($_POST['jms10'])) {
						$_SESSION['tabRepAlim'][9] = "8";
					}			
			?>
			<div align="left">
				<form id="formu" action="alim.php" method="post">
					<input class="mui-btn mui-btn--small mui-btn--raised mui-btn--primary" type="submit" value="Question précédente" name="Prec20"/>
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="hidden" value="ok" name="validation"/>
				</form>
			</div>
			<div class="mui--text-display2">
			<br>
			<br>
			<br>
			<br>
			Merci d'avoir répondu !
			</div>
			<?php 
				$_SESSION['alim'] = true;
			?>
			<form id="formulaire" action="accueil.php" method = "post">
				<div align="center">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="Revenir à l'accueil" />
				</div>
			</form>
			<?php 
				}
			?>
		</div>
	</body>
</html>