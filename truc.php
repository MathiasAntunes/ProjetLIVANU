<?php session_start(); ?> <!-- Utilisateur/Mdp en dur avec des listes -->
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Test question</title>
		<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
		<script src="//cdn.muicss.com/mui-0.9.9/js/mui.min.js"></script>
	</head>
					 <!--faire un deuxième fichier dans celui là juste laisser la décla de tabRep dans l'autre faire les conditions et le remplissage de tab rep-->
	<body>
		 
		<?php 
			$_SESSION['tabRep'] = array();
		?>
		Pret à commencer ?
		<form id="formulaire" action="truc2.php" method = "post">
			<input class="mui-btn mui-btn--primary" type="submit" value="C'est parti !" name = "Go"/>
		</form>
	</body>
</html>