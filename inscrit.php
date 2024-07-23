<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', '');
if (isset($_POST['envoi'])) {
  if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1($_POST['mdp']);
    $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp)VALUES(?, ?)');
    $insertUser->execute(array($pseudo, $mdp));

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
    $recupUser->execute(array($pseudo, $mdp));
    $message = "Votre compte à bien été créé";
    if ($recupUser->rowCount() > 0) {

      $_SESSION['pseudo'] = $pseudo;
      $_SESSION['mdp'] = $mdp;
      $_SESSION['id'] = $recupUser->fetch();
    }

    // echo $_SESSION['id'];

    // header("Location : connexion.php");

  } else {
    echo  " <script type='text/javascript'>
            
            alert('Veuilez completez tous les champs ! ');
            </script>";
  }
}



?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="/css/Inscription.css"> -->
  <!-- <link rel="stylesheet" href="css/inscrit.css"> -->
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>frenchfighter-login</title>
    <!-- <link rel="stylesheet" href="css/Inscription.css"> -->
    <link rel="stylesheet" href="css/inscrit.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  </head>

  <body>
    <form method="POST">

      <h1>S'inscrire</h1>
      
      <!-- <div class="social-media">
        <p><i class="fab fa-google"></i></p>
        <p><i class="fab fa-youtube"></i></p>
        <p><i class="fab fa-facebook-f"></i></p>
        <p><i class="fab fa-twitter"></i></p>
      </div> -->
      
      <p class="choose-email">ou utiliser mon adresse e-mail :</p>

      <div class="inputs">
        <!-- <p>Nom</p>
        <input type="name" placeholder="Nom">
        <p>Prénom</p>
        <input type="name" placeholder="Prénom"> -->
        <!-- <p>Pseudo</p>
        <input type="text" placeholder="Pseudo"> -->
        <p>Email</p>
        <input type="email" placeholder="Email" name="pseudo" />
        <p>Créer un mot de passe</p>
        <input type="password" placeholder="Mot de passe" name="mdp">
        <!-- <p>Confirmation du mot de passe</p>
        <input type="Password" placeholder="Mot de passe"> -->
      </div>


      <div align="center">

        <a href="connexion.php" id="texte" class="highlight">Se connecter</a><br><br>

        <button type="submit" name="envoi" id="addClassButton">Inscription</button>

        <br><br><?php
                if (isset($message)) {
                  echo $message;
                }

                ?>

      </div>
    </form>
    <!-- <script>
      document.getElementById('addClassButton').addEventListener('click', function() {
        var texte = document.getElementById('texte');
        if (!texte.classList.contains('highlight')) {
          texte.classList.add('highlight');

        }
      });
    </script> -->
  </body>

  </html>
</body>

</html>