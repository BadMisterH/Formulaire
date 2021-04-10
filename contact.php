<?php
session_start();
include 'database.php'; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/LogoPortefolio2.png">
  <link rel="stylesheet" href="../cssPortefolio/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Contact</title>
</head>

<body>


<div class="background">

<div class="container">

<form action="" method="post" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">

<h1 style="text-align : center">Contact</h1>

<div class="form-group">

<label>Saisir votre prenom</label>
<input type="text" name="prenom" id="prenom" class="form-control" placeholder="Taper votre prenom">
<label>Saisir votre nom</label>
<input type="text" name="nom" id="nom" class="form-control" placeholder="Taper votre nom">
<label>Saisir votre adresse mail</label>
<input type="email" name="adresse_mail" class="form-control" id="adresse_mail" placeholder="Taper votre adresse mail">
<label>Saisir votre mot de passe</label>
<input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Votre mot de passe">

</div>

<div class="buttt">
<button type="submit" name="envoyer" value="envoyer" class="btn btn-primary" >Envoyer</button>
<a href="./index.html" class="btn btn-info">Retour</a>
</div>

</div>


</form>

</div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script> 
  
</body>
</html>

  


