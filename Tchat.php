    1 <?php
    2         session_start();
    3 ?>
    4 <html>
    5 <head>
    6 <title>TChat</title>
    7 <script src="jquery-1.3.1.min.js">
    8 </script>
    9 <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
   10 <script type="text/javascript">
   11     CKEDITOR.replace( 'editor1' );
   12 </script>
   13 </head>
   14 <!-- Include SCEditor's JS -->
   15 <script> 
   16 // J'appelle la fonction Message() qui va enregistrée les messages //
   17 function Message(){
   18                         $.ajax({
   19                                 url: 'Sauvegarde.php',
   20                                 type: 'POST',
   21                                 data: "message=" + document.getElementById("message").value,
   22                                 success: function(dataRecup)    {
   23                                     dataRecup = "ok";
   24                                                                                 
   25                                     
   26                                 }
   27                             });             
   28                     }       
   29             
   30             // J'appelle la fonction affiche() qui va afficher les messages enregistrés //
   31 function affiche() {
   32                         $.ajax({ 
   33                                 url: 'message.php',
   34                                 success: function(dataRecup)     {      
   35                                     document.getElementById("conversation").innerHTML = "";                             
   36                                     document.getElementById("conversation").innerHTML = dataRecup;
   37                                     }
   38                                 });
   39                             }
   40 setInterval("affiche()", 2000);             
   41                 </script>
   42 <script type="text/javascript">
   43     window.onload = function()
   44     {
   45         CKEDITOR.replace( 'editor1' );
   46     };
   47 </script>
   48 <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
   49 </head>
   50 <body onload="affiche()">
   51     <form>
   52     
   53     
   54     <!-- Titre -->
   55         <h1><img src="http://www.runemasterstudios.com/graemlins/images/snoopyhouse.gif">TChat</h1>
   56         </br>
   57         
   58     <!-- Table -->
   59     
   60     <table border="2" width="100%" height="25%">
   61     
   62     <!-- Là où l'on voit la conversation -->
   63         <tr>
   64             <td>
   65             <div id="conversation"  style="resize: none; overflow:auto; width:800;"></div>
   66                 
   67             </td>
   68             
   69     <!-- Là où l'on voit les pseudos des personnes connectées -->
   70             <td>
   71             <div id="pseudonyme"  style="resize: none;">
   72             <?php
   73                 if (isset($_SESSION['pseudo']))
   74                         echo $_SESSION['pseudo'];
   75             ?>
   76             </div>                      
   77             </td>
   78         </tr>
   79     </table>
   80     
   81     <!-- Message à envoyer -->
   82     <input type="text" size="151" id="message">
   83     
   84     <input type="button" value="Envoyer" onClick="javascript:Message()" onKeyPress="if (event.keyCode == 13) javascript:Message()" > 
   85     </br>
   86     </br>
   87     
   88     <!-- Autre table -->
   89     <table border="2" width="100%" height="35%">
   90     
   91         <tr>
   92             <td>
   93         
   94     <!-- Commandes et les émoticônes -->
   95                 <h4 align="center"> Commandes </h4>
   96             </td>
   97         </tr>
   98         <tr>
   99             <td align="center" id="editor1" name="editor1">
  100             </td>
  101         </tr>
  102         <tr>
  103             <td>
  104     
  105     <!-- Exemples -->
  106                 [b]Texte[/b] = <b>Texte</b></br>
  107                 [i]Texte[/i] = <i>Texte</i></br>
  108                 [u]Texte[/u] = <u>Texte</u></br>
  109                 [a=http://www.site.com] Texte du lien[/a] = <a href="Textedulien.html">Texte du lien</a></br>
  110                 [c=blue|yellow|green|pink|red|orange]Mon Texte[/c] = <font color="green">Mon texte</font>
  111             </td>
  112             <td>
  113             
  114     <!-- Statut -->
  115                 <h4 align="center">Statut 
  116                     <Select name="statut">
  117                             <option>En Ligne</option>
  118                             <option>Hors Ligne</option>
  119                             <option>En cours</option>
  120                             <option>Dans son monde imaginaire</option>
  121                             <option>Dort</option>
  122                     </Select></h4>
  123                     
  124     <!-- Deconnexion -->
  125                 <p align="center"><a href="deconnexion.php">--> Deconnexion - 
  126                 <?php   
  127                                     if (isset($_SESSION['pseudo']))
  128                                         echo $_SESSION['pseudo'];
  129                 ?> <-- </a>
  130             </td>
  131         </tr>
  132     </table>
  133 </form>
  134 </body>
  135 </html>
