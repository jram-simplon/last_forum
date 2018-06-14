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

      // ONGLET TOP MENU S\'INSCRIRE / NOM DU LOGIN

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

 echo '
      </li>
     
      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formulaire d\'inscription</h5>
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

<div>Signature :</div><input type="text" name="signature"><br/>







<br><input type="submit" name="submit" value="Valider">

</form>  
          
      </div>
    </div>
  </div>
</div>



    </ul>
  </div>
</nav>
</div>       
<div id="corps_forum">';

?>

