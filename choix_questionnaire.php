<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Test question</title>
		<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<form id="formulaire" action="truc2.php" method = "post">
			<select name="selection">
				<option selected="selected">Faites votre choix</option>
				<option value="epices">EPICES</option>
				<option value="autre">Autre</option>
			</select>
			<input type="submit" value="C'est parti !" name = "Go"/>
		</form>
	</body>
</html>