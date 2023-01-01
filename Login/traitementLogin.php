<?php
     require ('fonction.php');
     $name=$_POST['login'];
     $mdp=sha1($_POST['password']);
     $CountAdmin=authentification($name,$mdp);
     //echo $CountAdmin;
 
    if($CountAdmin>0) {
    echo "atoo";
        $grade=getGrade($name);
        if($grade == 1 ){ //etudiant
            header('Location: ../Desing_Etudiant/index.html');
        }
        if($grade == 2 ){ //professeur
            header('Location: ../Desing_Professeur/index.html');
        }
        if($grade == 3 ){ //scolarite
            header('Location: ../Desing_Scolarite/index.html');
        }

    }else { 
        echo"erreur";
        //header('Location: login-register.php?error=1');
    }
?>