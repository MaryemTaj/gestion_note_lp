<?php
	
	require_once("connection.php");
	if(isset($_POST['Ajouter'])){
	$note=$_POST['noteExamen'];
	$et=$_POST['id_etud'];
	$ex=$_POST['idEx'];
	

	$req="insert into note(id_etud,id_exam,note_exam) VALUES('$et','$ex',$note)";
    $result = $conn->query($req);
	
	
}

?>