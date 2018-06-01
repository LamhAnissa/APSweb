<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <title>APS WEB</title>
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
      <a class="navbar-brand" href="reverra sur le document / view courrier">Comment se connecter?</a>
      </div>
     
    </ul>
  </div>
</nav>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
 
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 12px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}



.container {
    padding: 16px;
}



span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
  <br> </br>

<h2 style= "text-align:center">Authentification Référent</h2>
  <br> </br>


<?php echo form_open('index.php/Referent/validation'); ?>


  <div class="container">
    <label for="uname"><b>Identifiant</b></label>
    <input type="text" placeholder="Entrez votre Identifiant" name="mail" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer votre mot de passe" name="psw" required>
        
    <button type="submit">Se connecter</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Se souvenir
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   <a href="<?php echo site_url("Referent/index");?>" > <button type="button" class="cancelbtn">Annuler</button></a>
    <span class="psw">Mot de passe <a href="#">oublié?</a></span>
  </div>
</form>

 <div id="footer">
      <div class="container ">
        <p class="footer-block"  style="text-align:center;" style="color:Grey"><strong>   Projet Web - IG3 Polytech - LAMHAOUAR  &copy;</strong></p>  
      </div>
    </div>
</body>
</html>