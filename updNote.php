<?php
	session_start();
	require_once("connection.php");
	
	$note=$_POST['noteExamen'];
	$et=$_POST['id_etud'];


	$ex=$_SESSION['idEx'];

	$req="update note set note_exam=$note where id_etud='$et' and id_exam='$ex'";

	$conn ->query($req);
	$fil=$_SESSION['code_fil'];
	header("location:idModifier.php?code_fil=$fil");

?>