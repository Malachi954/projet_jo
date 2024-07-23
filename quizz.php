<?php
session_start();
// if(!$_SESSION['mdp']){
//   header('Location:connexion.php');
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Quiz JO</title>
    
</head>
<body>

<header>
    <!-- <nav>
      <ul>
        <li><a href="index.php"><img src="images/logo_final_bleu.png" alt="logo_bleu" width="200px"></a></li>
      </ul>
      <div>
        <li><a href="quizz.php">quizz</a></li>
        <li><a href="actu.php">actualités</a></li>
        <button><a href="inscrit.php">Inscription/Connexion</a></button>
      </div>

    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="#"><img src="images/logo_final_bleu.png" alt="logo"></a> -->
        <a class="navbar-brand" href="index.php" style="color: white;">frenchOlympicfighter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                    <a class="nav-link" href="quizz.php">Quizz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="actualite.php">Actualité</a>
                </li>

                <?php if (isset($_SESSION['pseudo'])): ?>
                    <li class="nav-item dropdown"  style="margin-left: auto;">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($_SESSION['pseudo']); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profil_test.php">Profil</a>
                        <a class="dropdown-item" href="deconnexion.php">Déconnexion</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                    <a href="inscrit.php" class="nav-button">Inscription/Connexion</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li> -->
                <?php endif; ?>
             
            </ul>
        </div>
    </nav>
  </header>


<section class="section-quizz">
  <div class="welcome-container" id="welcome-container">
        <h1>Bienvenue au Quiz sur les Athlètes Olympiques</h1>
        <p>Appuyez sur "Entrée" pour remplir la barre de chargement...</p>
        <div class="loading-bar">
            <div class="loading-bar-fill" id="loading-bar-fill"></div>
        </div>
    </div>
    <div class="discipline-container hide" id="discipline-container">
        <h2>Choisissez une discipline</h2>
        <button class="btn" onclick="selectDiscipline('judo')">Judo</button>
        <button class="btn" onclick="selectDiscipline('taekwondo')">Taekwondo</button>
        <button class="btn" onclick="selectDiscipline('boxe')">Boxe</button>
        <button class="btn" onclick="selectDiscipline('lutte')">Lutte</button>
        <button class="btn" onclick="selectDiscipline('karaté')">Karaté</button>
    </div>
    <div class="quiz-container hide" id="quiz-container">
        <button class="btn-back" id="back-btn">Retour</button>
        <h1>Quiz sur les Athlètes Olympiques</h1>
        <div id="question-container" class="hide">
            <img id="athlete-image" src="Maquette figma photo.png" alt="">
            <p id="question"></p>
            <div id="answer-buttons" class="btn-container"></div>
        </div>
        <div id="result-container" class="hide">
            <p id="score"></p>
            <button id="restart-btn">Recommencer</button>
        </div>
        <div id="timer">Temps restant : <span id="time">50</span> secondes</div>
    </div>
    <script src="quizz.js"></script>
  </section>

  <div class="mousemove"></div>


  <footer>
    <div class="follower-section">
      <p>Suivez l'actualité de Paris 2024</p>
      <div class="social">
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-x-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-threads"></i>
        <i class="fa-brands fa-linkedin-in"></i>
      </div>

    </div>

    <div class="footer-section">
      <p><img src="images/logo_final_bleu.png" alt="logo_noir" width="200px"></p>
      <div class="credit">
        <ul>
          <li>Crédits</li>
          <li><a href="">Conditions générale de ventes</a></li>
          <li><a href="">Condition générale d'utilisation</a></li>
          <li><a href="">Mentions Légales</a></li>
        </ul>
      </div>
    </div>
    <p>Copyright 2024. Tous droits réservés</p>
  </footer>

  <!-- <script src="app.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>