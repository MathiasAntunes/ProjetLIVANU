<?php session_start(); ?> <!-- Utilisateur/Mdp en dur avec des listes -->
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANU</title>
		<link rel="stylesheet" type="text/css" href="CSS.css" />
	</head>
					 <!--faire un deuxième fichier dans celui là juste laisser la décla de tabRep dans l'autre faire les conditions et le remplissage de tab rep-->
	<body>
	<div class="mui-appbar">
		<table width="100%" height="110px">
   		<tr style="vertical-align:middle;">
      		<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Projet LIVANU</td>
    	</tr>
  		</table>
	</div>
	<table width="100%" height="100%" >
		<tr style="height:33%;">
			<td align="center" class="mui--text-display3">
				<?php 
				$_SESSION['tabRep'] = array();
				?>
				Pret à commencer ?
			</td>
		</tr>
		<tr style="height:50%;">
			<td align="center">
				<a href="choix_questionnaire.php" class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary">C'est parti !
				</a>
			</td>
		</tr>	
	</table>
	<footer>
		<div class="mui--text-center">
			Made with ♥ by Mathias, Jonathan et Pierre
  		</div>
	</footer>
	<body>
</html>