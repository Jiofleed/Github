    1 <?php
    2 session_start();
    3 include("connexionBDD.php");
    4 if(isset($_POST['pseudo'])) 
    5 {
    6     $pseudo=$_POST["pseudo"];
    7     $mdp=$_POST["password"];
    8 
    9     $requete="select * from utilisateur where pseudo = '$pseudo' and password = '$mdp'";
   10     $res = mysql_query($requete);
   11     
   12     if(mysql_num_rows($res)!=0) {
   13             $_SESSION['pseudo']=$pseudo;
   14             echo "ok";}
   15     else
   16        echo ("nok");
   17 }
   18 
   19 mysql_close();
   20 ?>
