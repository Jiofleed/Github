    1 <?php
    2 session_start();
    3 include("connexionBDD.php");
    4 if(isset($_SESSION['pseudo'])) 
    5 {
    6     $requete="select * from message order by DateCreation,HeureCreation asc limit 50";
    7     $req = mysql_query($requete);
    8     $resultat="";
    9     if($req)
   10     {
   11         while ($ligne=mysql_fetch_assoc($req))
   12         {
   13             $resultat = $resultat.$ligne['pseudo']."<i> a écrit le ".$ligne ['DateCreation']. " à ".$ligne ['HeureCreation']. "</i> : ".$ligne ['message']."<br>";
   14         }
   15         echo  $resultat;    
   16     }       
   17     else
   18         echo " rien ";  
   19 }
   20 ?>
