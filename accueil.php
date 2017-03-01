<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANU</title>
		<link rel="stylesheet" type="text/css" href="CSS.css"/>
	</head>
	<body>
		<?php
			if (isset($_POST['go'])){
				$_SESSION['PatDate'][0] = ucfirst(strtolower($_POST['nomP']));
				$_SESSION['PatDate'][1] = ucfirst(strtolower($_POST['prenomP']));
				$_SESSION['PatDate'][2] = date("d/m/Y");
				$_SESSION['tabRepEpices'] = array(" "," "," "," "," "," "," "," "," "," "," "," ");
				$_SESSION['tabRepSF']= array(" "," "," "," "," "," "," "," "," "," "," "," ");
				$_SESSION['tabRepAlim'] = array(" "," "," "," "," "," "," "," "," "," ");
				
			}
		?>
		<div class="mui--text-headline" align="right"><?php echo $_SESSION['PatDate'][0]; echo " "; echo $_SESSION['PatDate'][1];echo "  ";?></div>
		<div class="mui-appbar">
			<div align="center">
				<table width="100%">
					<tr style="vertical-align:middle;">
						<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Projet LIVANU</td>
					</tr>
				</table>
			</div>
		</div>
		<div align="center">
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
</html>