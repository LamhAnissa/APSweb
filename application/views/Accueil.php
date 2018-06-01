<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title>APS WEB </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="<?php echo site_url("Referent/index");?>" class="navbar-brand" >APS Serv.</a>
    </div>
    <ul class="nav navbar-nav">
      <div class="navbar-header">
      <a class="navbar-brand" >Comment se connecter?</a>
      </div>
     
    </ul>
  </div>
</nav>

<div class="jumbotron" style="background-color:rgb(70, 225, 125);">
  <h1 class="display-4" style="color :White; text-align:center;">Bienvenue sur APS Service</h1>
  <br> </br>
  <br> </br>
  <p class="lead" style="color :black;"><b>Cette plateforme est destinée à permettre un échange d'information entre nos membres professionels et l'entourage de nos clients .</b></p>
   
  <hr class="my-4">
  <p style="color :white" >Veuillez cliquer sur  <i style="color:black">"Connexion Referent" </i>pour accéder à votre espace personnel ou sur <i style="color:black">"Connexion Membre" </i>si vous faites partie de l'équipe professionel de <i>APS Serv.</i></p>
  <p class="lead">
   <br> </br>
  
  
     
 
<a href="#"<button type="button" class="btn btn-warning btn-lg btn-block" style="color:black;">Connexion Membre</button></a>
<br> </br>
   <a href="<?php echo site_url("Referent/connexion");?>" <button type="button" class="btn btn-danger btn-lg btn-block" style="color:black;">Connexion Referent</button></a>
  </p>
</div>

 <div id="footer">
      <div class="container ">
        <p class="footer-block"  style="text-align:center;" style="color:Grey"><strong>   Projet Web - IG3 Polytech - LAMHAOUAR  &copy;</strong></p>	
     	</div>
    </div>
</body>
</html>

