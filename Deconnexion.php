  1 <!-- déconnection  --> 
    2 <?php
    3 
    4 session_start();
    5 session_destroy ();
    6 session_unset();
    7 echo ' Deconnexion en cours ...' ;
    8 header("Refresh: 2;URL=/Projet2013/Connexion.php");
    9 ?>
