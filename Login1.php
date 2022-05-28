<?php 
session_start();

require_once("connection.php");
if(mysqli_connect_errno())
{

printf("probleme de connexion  %s",mysqli_connect_error());
    exit();

}


if(isset($_POST['login']) && isset($_POST['pwd']))
{ 
 
    $login = $_POST['login']; 
    $pwd = $_POST['pwd'];
    

    $COUNT= 0;
    if($login != "" && $pwd != "")
    { 
       $requete = "SELECT count(*) ,etudiant.nom_etud,etudiant.prenom_etud,etudiant.id_comp, compte.login,compte.pwd FROM etudiant inner join compte on
etudiant.id_comp=compte.id_comp WHERE compte.login = '$login'  and compte.pwd = '$pwd' ";
       $exec_requete = mysqli_query($conn,$requete);
       $reponse      = mysqli_fetch_array($exec_requete);
       $COUNT = $reponse['count(*)'];
     
        if($COUNT!=0) 


        {
          $requete = "SELECT  etudiant.*, compte.login,compte.pwd FROM etudiant inner join compte on
etudiant.id_comp=compte.id_comp WHERE compte.login = '$login'  and compte.pwd = '$pwd' ";
           $exec_requete = mysqli_query($conn,$requete);
           $reponse      = mysqli_fetch_array($exec_requete);

           $_SESSION['cin'] = $reponse['cin'];
           $_SESSION['login'] = $reponse['login'];
           $_SESSION['pwd'] = $reponse['pwd'];
           $_SESSION['nom_etud'] = $reponse['nom_etud'];
           $_SESSION['prenom_etud'] = $reponse['prenom_etud'];
           $_SESSION['id_etud'] = $reponse['id_etud'];
           $_SESSION[''] = $reponse[''];
           
          header('Location: etudiant.php');}
        
        else if  ($COUNT==0)
        {
           $requete = "SELECT count(*),admin.id_adm,compte.id_comp,compte.login,compte.pwd from admin INNER JOIN compte on admin.id_comp=compte.id_comp where 
              compte.login = '$login'  and compte.pwd = '$pwd' ";
        $exec_requete = mysqli_query($conn,$requete);
        $reponse     = mysqli_fetch_array($exec_requete);
        $COUNT = $reponse['count(*)'];
        if($COUNT!=0) // nom d'utilisateur et mot de passe correctes
        {
           $requete = "SELECT count(*),admin.*,compte.id_comp,compte.login,compte.pwd from admin INNER JOIN compte on admin.id_comp=compte.id_comp where 
            compte.login = '$login'  and compte.pwd = '$pwd' ";
           $exec_requete = mysqli_query($conn,$requete);
           $reponse      = mysqli_fetch_array($exec_requete);

           $_SESSION['id_adm'] = $reponse['id_adm'];
           $_SESSION['login'] = $reponse['login'];
           $_SESSION['pwd'] = $reponse['pwd'];
           $_SESSION['nom_adm'] = $reponse['nom_adm'];
           $_SESSION['prenom_adm'] = $reponse['prenom_adm'];
           $_SESSION['id_comp'] = $reponse['id_comp'];
          
         
           header('Location:choixFilAdmin.php');
        }
        
        
         else  {
           
           $requete = "SELECT count(*),professeur.id_prof,professeur.nom_prof,professeur.nom_prof,professeur.cin_prof,professeur.id_comp,compte.id_comp,compte.login,compte.pwd FROM professeur INNER join compte on professeur.id_comp=compte.id_comp
 where 
            compte.login = '$login'  and compte.pwd = '$pwd' ";

        $exec_requete = mysqli_query($conn,$requete);
        $reponse     = mysqli_fetch_array($exec_requete);
        $COUNT = $reponse['count(*)'];
        if($COUNT!=0) // nom d'utilisateur et mot de passe correctes
        {
          $requete = "SELECT professeur.*,compte.login,compte.pwd FROM professeur INNER join compte on professeur.id_comp=compte.id_comp
 where 
           compte.login = '$login'  and compte.pwd = '$pwd' ";
           $exec_requete = mysqli_query($conn,$requete);
           $reponse      = mysqli_fetch_array($exec_requete);

            $_SESSION['id_prof'] = $reponse['id_prof'];
           $_SESSION['cin_prof'] = $reponse['cin_prof'];
           $_SESSION['login'] = $reponse['login'];
           $_SESSION['pwd'] = $reponse['pwd'];
           $_SESSION['nom_prof'] = $reponse['nom_prof'];
           $_SESSION['prenom_prof'] = $reponse['prenom_prof'];
           $_SESSION['id_comp'] = $reponse['id_comp'];
          
           $_SESSION['type'] = $reponse['type'];
            
           header('Location: choixfiliere.php');
        }
        }
        }
        
    }
   else 
        {

           header('Location:page-login.html');
           echo " Le champ login ou mot de passe incorrect "; // utilisateur ou mot de passe incorrect
        }
}
 else
    {
        header('Location:page-login.html');
        echo " Le champ nom login ou mot de passe vide ";// utilisateur ou mot de passe vide
    }
mysqli_close($conn); // fermer la connexion

?>