<?php
require("Connexion.php");

    function authentification($login,$mdp)
    {
        $sql=" SELECT count(idPers) FROM Personne WHERE mail='%s' AND mdp='%s'";
        $sql=sprintf($sql,$login,$mdp);
        $result=mysqli_query(dbconnect(),$sql);
        $count_Enseignent=mysqli_num_rows($result);
        return $count_Enseignent;
    }

    function getGrade($mail)
    {
        $sql="SELECT * FROM Personne where mail='%s'";
        $sql=sprintf($sql,$mail);
        echo $sql;
        $result=mysqli_query(dbconnect(), $sql );
        $resulat=mysqli_fetch_assoc($result);
        $resulat=$resulat['grade'];
        return $resulat;
    }

?> 