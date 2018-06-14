<?php

SESSION_START();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sheeks - For Us By Us</title>
     <meta charset="utf-8">
	
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paneladmin.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>


   <body>
       
       
   <div class="container">
   <nav class="navbar navbar-expand-lg navbar-light bg-light-right">
  <a class="navbar-brand" href="#"><img src="images/LOGO.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> SHEEKS - For Us By Us</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Portail <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
            <?php

      // ONGLET TOP MENU S'INSCRIRE / NOM DU LOGIN

      if (empty($_SESSION)) {
echo '
      <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">S\'identifier</a>';

      }else{

      echo '<a class="nav-link" href="./forum/voirprofil.php?m='.$_SESSION['id'].'&action=consulter">Hello '.$_SESSION['pseudo'].' !</a>';

      }

      ?>
        
      </li>
      
      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formulaire de connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div class="form-group">
          <form id="userconnection" action="./connexion.php" method="post">



<div>Pseudo   :</div><input type="text" name="pseudo"><br>



<div>Password:</div><input type="password" name="password"><br>



<br><input type="submit" name="submit" value="Se connecter">



          </form>
          
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>

      <li class="nav-item active">
        <?php
              if (empty($_SESSION)) {
echo '
      <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter2">S\'inscrire</a>';

      }else{

      echo '<a class="nav-link" href="./deconnexion.php">Deconnexion</a>';

      }

      ?>
      </li>
     
      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formulaire d'inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  class="form-group" id="newuser" action="./forum/register.php" method="post" enctype="multipart/form-data">



<div>Pseudo   :</div><input type="text" name="pseudo"><br/>

<div>Email   :</div><input type="text" name="email"><br/>

<div>Password:</div><input type="password" name="password"><br/>

<div>Retapez votre Password:</div><input type="password" name="confirm"><br/>







<br><input type="submit" name="submit" value="Valider">

</form>  
          
      </div>
    </div>
  </div>
</div>



    </ul>
  </div>
</nav>

      <div class="fille">
        <img src="images/back9.jpg">
        
      </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="deuxième-navbar">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-columns"></i> Forum</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Actualités</a>
     
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-book"></i> Presentation du Site</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
  </div>
</nav>
         
         <div class="contient">
          <h5>Une news pour les amoureux dédiés à Overwatch</h5>
         <div class="post">
        <div class="sujet">
        <img src="images/overwatch.jpg">
   
        </div>  

          <div class="espace">
          
        </div>

      <div class="phrase">
        <h8 class="titre">Publié aujourd'hui à 18h30</h8>
        <p>3 commentaires <i class="far fa-comments"></i></p>
        <p>Ce vendredi, ce fut super cool, j'ai réussi a dégommer des mecs qui se prennaient pour je sais pas ki a Over watch et c'est pour moi une libération !!!!</p>

     
   
    </div>


    
    </div>
     <hr>
    </div> 
     <div class="contient">
          <h5>Une news pour les amoureux dédiés à Overwatch</h5>
         <div class="post">
        <div class="sujet">
        <img src="images/fille.png">
   
        </div> 

        <div class="espace">
          
        </div>

      <div class="phrase">
        <h8 class="titre">Publié aujourd'hui à 19h30</h8>
        <p>2 commentaires <i class="far fa-comments"></i></p>
        <p>Ce jeudi, je suis tombé sur de superbes fan arts mettant en scène plusieurs héros d'Overwatch. Le premier est l'oeuvre de Lisa Buijteweg, qui a tenu à rendre hommage à Ange Rose. Les autres sont à mettre au crédit du talentueux Sean Tay, qui se fait régulièrement plaisir sur des personnages de jeu vidéos. Bravo !</p>

     
   
    </div>


    
    </div>
     <hr>
    </div> 

     <div class="contient">
          <h5>Une news pour les amoureux dédiés à World of Warcraft</h5>
         <div class="post">
        <div class="sujet">
        <img src="images/ww3.jpg">
   
        </div> 

        <div class="espace">
          
        </div>

      <div class="phrase">
        <h8 class="titre">Publié aujourd'hui à 20h30</h8>
        <p>8 commentaires <i class="far fa-comments"></i></p>
        <p>OULALALALALA c'est la lose j'y arrive pas à ce jeu, il est trop dur !!!!!!!!</p>

     
   
    </div>


    
    </div>
     <hr>
    </div> 


    </div>
   </body>
</html>