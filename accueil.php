<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANU</title>
		<link rel="stylesheet" type="text/css" href="CSS.css"/>
	</head>
	<!-- regarde jQuesry ui pour faire un pop up, etes-vous sure ? -->
	<body>
		<?php
			if (isset($_POST['go'])){
				$_SESSION['PatDate'][0] = ucfirst(strtolower($_POST['nomP']));
				$_SESSION['PatDate'][1] = ucfirst(strtolower($_POST['prenomP']));
				$_SESSION['PatDate'][2] = date("d/m/Y");
				$_SESSION['tabRepEpices'] = array(" "," "," "," "," "," "," "," "," "," "," "," ");
				$_SESSION['tabRepSF']= array(" "," "," "," "," "," "," "," "," "," "," "," ");
				$_SESSION['tabRepAlim'] = array(" "," "," "," "," "," "," "," "," "," ");
				$_SESSION['SF'] = false;
				$_SESSION['alim'] = false;
				$_SESSION['epices'] = false;
			}
		?>
		<div class="mui--text-display2" align="right"><?php echo $_SESSION['PatDate'][0]; echo " "; echo $_SESSION['PatDate'][1];echo "  ";?></div>
		<div align="right">
			<form id="changePat" action="index.html" >
				<input type="submit" name="chPat" value="Changer de patient" class="mui-btn mui-btn--small mui-btn--raised 	mui-btn--primary"> 
			</form>
		</div>
		<div class="mui-appbar">
			<div align="center">
				<table width="100%">
					<tr style="vertical-align:middle;">
						<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Etude LIVANU</td>
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
					Choisissez le questionnaire que vous voulez réaliser : 
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
					<?php
						if ($_SESSION['epices'] == false) {
					?>
					<input type="submit" name="selection" value="EPICES" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--primary"> 
					<?php 
						} else {
					?>	
					<input type="submit" name="selection" value="EPICES" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger">
					<?php
						}
					?>
					<?php
						if ($_SESSION['SF'] == false) {
					?>
					<input type="submit" name="selection" value="SF-12" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--primary"> 
					<?php 
						} else {
					?>	
					<input type="submit" name="selection" value="SF-12" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger">
					<?php
						}
					?>
					<?php
						if ($_SESSION['alim'] == false) {
					?>
					<input type="submit" name="selection" value="Alimentation" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--primary"> 
					<?php 
						} else {
					?>	
					<input type="submit" name="selection" value="Alimentation" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger">
					<?php
						}
					?>
					
				</div>
			</form>
		</div>
	</body>
</html>