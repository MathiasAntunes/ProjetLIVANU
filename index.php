<!-- Utilisateur/Mdp en dur avec des listes -->
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANU</title>
		<link rel="stylesheet" type="text/css" href="CSS.css" />
	</head>
	<body>
	<script type="text/javascript">
			function verifForm(f){
				if (f.nomP == "") {
					f.nomP.style.backgroundColor = "#fba";
					return false;
				}
				if (f.prenomP =="") {
					f.prenomP.style.backgroundColor = "#fba";
					return false;
				}
			}
		</script>
		<div class="mui-appbar">
			<table width="100%" height="110px">
				<tr style="vertical-align:middle;">
					<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Projet LIVANU</td>
				</tr>
			</table>
		</div>
		<br>
		<table width="100%" height="77%" >
			<tr style="height:50%;">
				<td align="center">
					<form action="accueil.php" method ="post" onsubmit="return verifForm(this)">
						<div class="mui--text-display2">
							Nom du patient : <br><input type="text" name="nomP"> <br> <br> <!-- Javascript ou que sais-je pour voir si les champs sont bien complétés-->
							Prénom du patient : <br><input type="text" name="prenomP"> <br><br>
						</div>
							<input type="submit" class="mui-btn mui-btn--large mui-btn--raised mui-btn--primary" value="C'est parti">

					</form>
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