<?php session_start(); 
if ($_POST['selection'] == "EPICES") {
	header('Location: epices.php'); 
}
if ($_POST['selection'] == "SF-12") {
	header('Location: SF-12.php');
}
if ($_POST['selection'] == "Alimentation") {
	header('Location: alim.php'); 
}	
?>