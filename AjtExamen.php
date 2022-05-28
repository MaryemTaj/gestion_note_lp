<?php
		require_once("connection.php");


		$id_ex=$_POST['id_exam'];
		
		$id_ses=$_POST['id_session'];
		$id_el=$_POST['id_elem'];

		$code_fil=$_POST['lp'];
        $originalDate =$_POST['dateEx'];
        
        $DateTime = DateTime::createFromFormat('d/m/Y', $originalDate);
        $date_ex = $DateTime->format('Y-m-d');


		$req="insert into examen(id_exam,date,id_session,id_elem) values ('$id_ex','$date_ex','$id_ses','$id_el')";


		if ($conn ->query($req)==true) 

    {  
        echo "<script language='Javascript'>";
            echo "<!--\n"; // le "\n" permet de passer une ligne en Javascript
            echo "alert('L'examen  a été enregistré !');\n";
        
        echo "</script\n>";    
        
            
  
  
    }else{
    	Echo "Erreur ".$req."<br>". $conn ->error;
    } header("location:planing.php?code_fil=$code_fil") ;
?>