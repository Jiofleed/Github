 <?php
    2 session_start();
    3 include("connexionBDD.php");
    4 if(isset($_POST['pseudo'])) 
    5 {
    6     $pseudo=$_POST["pseudo"];
    7     $mdp=$_POST["password"];
    8 
    9     $requete="insert into utilisateur (pseudo,password,statut,heureDateConnexion,topAdmin) values ('$pseudo','$mdp','','','')";
   10     $res = mysql_query($requete);
   11     if($res) {
   12             $_SESSION['pseudo']=$pseudo;
   13             $_SESSION['password']=$mdp;
   14             echo "ok";}
   15     else
   16             echo "nok";         
   17 }
   18 ?>
