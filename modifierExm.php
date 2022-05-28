<?php
	session_start();
	require_once("connection.php");
	
	$note=$_POST['noteExamen'];
	$et=$_POST['id_etud'];


	$ex=$_SESSION['id_exam'];

	$req="update note set note_exam='$note' where id_etud=$et && id_exam='$ex'";

	$conn ->query($req);
	header("location:modifierNote.php");

?>