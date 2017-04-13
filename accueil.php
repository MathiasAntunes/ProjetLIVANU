<?php session_start(); ?> 
<html>
	<head>
		<meta charset="UTF-8"/>
			<title>Projet LIVANUT</title>
		<link rel="stylesheet" type="text/css" href="CSS.css"/>
	</head>
	<p id="demo"></p>

	<script language="Javascript">
		function Confirmtest() {
			 alert("Attention ! Vous allez refaire un questionnaire deja rempli. Si vous ne souhaitez pas le refaire, appuyer sur retour après avoir fermé ce message. Sinon, poursuivez.");
		}
	</script>
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
			if(isset($_POST['Prec0SF']) and $_SESSION['SF'] == false){
				$_SESSION['tabRepSF']= array(" "," "," "," "," "," "," "," "," "," "," "," ");
			}
			if(isset($_POST['Prec0alim']) and $_SESSION['alim'] == false){
				$_SESSION['tabRepAlim'] = array(" "," "," "," "," "," "," "," "," "," ");
			}
			if(isset($_POST['Prec0epices']) and $_SESSION['epices'] == false){
				$_SESSION['tabRepEpices'] = array(" "," "," "," "," "," "," "," "," "," "," "," ");	
			}
		?>
		<div class="mui--text-display2" align="right"><?php echo $_SESSION['PatDate'][0]; echo " "; echo $_SESSION['PatDate'][1];echo "  ";?></div>
		<div align="right">
			<form id="changePat" action="fichier.php" >
				<input type="submit" name="chPat" value="Changer de patient" class="mui-btn mui-btn--small2 mui-btn--raised 	mui-btn--primary"> 
			</form>
		</div>
		<div class="mui-appbar">
			<div align="center">
				<table width="100%"  height="142px">
					<tr style="vertical-align:middle;">
						<td class="mui--appbar-height mui--text-light mui--text-display2" align="center">Etude LIVANUT</td>
					</tr>
				</table>
			</div>
		</div>
		<div align="center">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
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
					<input type="submit" name="selection" value="EPICES" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger" onclick="Confirmtest()">
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
					<input type="submit" name="selection" value="SF-12" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger" onclick="Confirmtest()">
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
					<input type="submit" name="selection" value="Alimentation" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--danger" onclick="Confirmtest()">
					<?php
						}
					?>
					
				</div>
			</form>
			</br></br>
			<?php
				if ($_SESSION['SF'] == true and $_SESSION['alim'] == true and $_SESSION['epices'] == true) {
			?>
				<form id="fini" action="fichier.php" method="post">
					<input type="submit" name="fin" value="Enregistrer les données et finir" class="mui-btn mui-btn--large mui-btn--raised 	mui-btn--primary">
				</form>
			<?php 
				}
			?>
		</div>
	</body>
</html>