<html>
    2 <head>
    3 <title> Ajax TChat Connexion </title>
    4 <script src="jquery-1.3.1.min.js">
    5 </script> 
    6 <script>
    7 function connect(){
    8      $.ajax({
    9             url: "verif.php",
   10             type: "POST",
   11             data: "pseudo=" + document.getElementById("pseudo").value +"&"+ "password=" + document.getElementById("motDePasse").value,
   12             success: function(dataRecup) {
   13                 if(dataRecup=="ok") {
   14                     alert("Tu es bien connecte");
   15                     document.location.href = "TChat.php";
   16                 }
   17                 else
   18                     alert("Pseudo ou mot de passe invalide");
   19                 }
   20             });
   21         }
   22         
   23 function inscrit(){
   24      $.ajax({
   25             url: "inscription.php",
   26             type: "POST",
   27             data: "pseudo=" + document.getElementById("pseudo").value +"&"+ "password=" + document.getElementById("motDePasse").value,
   28             success: function(dataRecup) {
   29                 if(dataRecup=="ok") 
   30                     alert("Vous vous etes bien connecte sur ce site");
   31                                 else
   32                     alert("Pseudo ou mot de passe invalide");
   33                 }                                                                                                                                                                                                                                                                                                                              
   34             });
   35     }
   36 
   37 </script>
   38 </head>
   39 <body> 
   40 <form>
   41 
   42 <!-- Titre -->
   43 <h2> Ajax TChat - Connexion </h2></br>
   44 
   45 <table>
   46 
   47 <!-- Pseudo -->
   48 <tr><td>Pseudo : </td><td><input type="text" id="pseudo"/></td></tr>
   49 
   50 <!-- Mot de passe -->
   51 <tr><td>Mot De Passe : </td><td><input type="password" id="motDePasse"/></td></tr>
   52 </table>
   53 
   54 <!-- Bouton Valider -->
   55 <input type="button" value="Connexion" onClick="javascript:connect()" />
   56 
   57 <!-- Lien inscription -->
   58 <a href="javascript:inscrit()">Inscription</a>
   59 </form>
   60 </body>
   61 </html>
