<?php
require_once("connection.php");
	$ex=$_POST['idEx'];

	$req="delete from examen where id_exam='$ex'";
	$conn ->query($req);
	$fil=$_POST['code_fil'];
	header("location:planing.php?code_fil=$fil");
?>