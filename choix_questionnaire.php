<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Test question</title>
	</head>
	<body>
		<form id="formulaire" action="epices.php" method = "post"> <!-- rajoutez la partie pour les noms-->
			<select name="selection">
				<option selected="selected">Faites votre choix</option>
				<option value="epices">EPICES</option>
				<option value="autre">Autre</option>
			</select>
			<input type="submit" value="C'est parti !" name = "Go"/>
		</form>
	</body>
</html>