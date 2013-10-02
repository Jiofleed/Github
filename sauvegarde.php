    1 <?php
    2 session_start();
    3 $pseudo=$_SESSION['pseudo'];
    4 $message=$_POST['message'];
    5 $Date=date("Y-m-d");
    6 $Heure=date("H:i:s");
    7 include("connexionBDD.php");
    8 if(isset($_SESSION['pseudo'])) 
    9 {
   10     $message=$_POST["message"];
   11     
   12     $requete="insert into message (message,DateCreation,pseudo,HeureCreation) values ('$message','$Date','$pseudo','$Heure')";
   13     
   14     $res = mysql_query($requete);
   15     if($res)
   16                 echo "ok";
   17             else
   18                 echo "nok";
   19         
   20 }
   21 ?>
