<?php session_start(); ?> <!-- Utilisateur/Mdp en dur avec des listes -->
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Test question</title>
		<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
		<!-- <script src="//cdn.muicss.com/mui-0.9.9/js/mui.min.js"></script> -->
	</head>
					 <!--faire un deuxième fichier dans celui là juste laisser la décla de tabRep dans l'autre faire les conditions et le remplissage de tab rep-->
	<body>
	<div class="mui-appbar">
		<table width="100%">
   		<tr style="vertical-align:middle;">
      		<td class="mui--appbar-height" align="center">Projet LIVANU</td>
    	</tr>
  		</table>
	</div>
	<table width="100%" >
		<tr style="height:150px; border:1px solid #aaa;">
			<td align="center">
				<?php 
				$_SESSION['tabRep'] = array();
				?>
				Pret à commencer ?
			</td>
		</tr>
		<tr style="height:150px;">
			<td align="center">
				<form id="formulaire" action="choix_questionnaire.php" method = "post">
					<input class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" type="submit" value="C'est parti !" name = "Bouttonmenu"/>
				</form>
			</td>
		</tr>	
	</table>
	<body>
</html>