<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANU</title>
		<link rel="stylesheet" type="text/css" href="CSS.css"/>
	</head>
	<body>
<<<<<<< HEAD
		<form id="formulaire" action="epices.php" method = "post"> <!-- rajoutez la partie pour les noms-->
			<select name="selection">
				<option selected="selected">Faites votre choix</option>
				<option value="epices">EPICES</option>
				<option value="autre">Autre</option>
			</select>
			<input type="submit" value="C'est parti !" name = "Go"/>
		</form>
=======
		<div align="center">
			<div class="mui-appbar">
				<table width="100%">
					<tr style="vertical-align:middle;">
						<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Projet LIVANU</td>
					</tr>
				</table>
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="mui-container" >
				<div class="mui--text-display2">
					Faites votre choix
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<form id="formulaire" action="choix_questionnaire.php" method = "post">
				<div>
					<input type="submit" name="selection" value="epices" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--primary"> <!-- changer le nom du boutton -->
					<input type="submit" name="selection" value="SF-12" class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary">
					<input type="submit" name="selection" value="Alimentation" class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary">
				</div>
			</form>
		</div>
	</body>
>>>>>>> origin/master
</html>