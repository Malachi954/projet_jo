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
  <title>Jeux Olympique</title>
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
        <ul class="nav-list">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" id="userDropdown">
                <i class="fa-solid fa-user"></i>
                </a>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="profil.php" class="dropdown-item">Profil</a>
                    <a href="deconnexion.php" class="dropdown-item">Déconnexion</a>
                </div>
            </li>
        </ul>
        </div>

    </nav> -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['pseudo'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i> <?php echo htmlspecialchars($_SESSION['pseudo']); ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profil.php">Profil</a>
                            <a class="dropdown-item" href="deconnexion.php">Déconnexion</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                <?php endif; ?>
            </ul>
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
                    <a class="nav-link" href="news.php">Actualité</a>
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

 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/paris2024.avif" class="d-block w-100" alt="...">
        <div class="dark-overlay"></div>
        <div class="carousel-caption custom-caption d-none d-md-block">
          <h2>Paris 2024</h2>
          <p>Les Jeux Olympiques à Paris en 2024.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Slide judo.jpg" class="d-block w-100" alt="...">
        <div class="dark-overlay"></div>
        <div class="carousel-caption custom-caption d-none d-md-block">
          <h2>Judo</h2>
          <p>Les combats de judo aux JO.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/femme_jo.jpg" class="d-block w-100" alt="...">
        <div class="dark-overlay"></div>
        <div class="carousel-caption custom-caption d-none d-md-block">
          <h2>Les femmes aux JO</h2>
          <p>Participation des femmes dans les sports de combat aux JO.</p>
        </div>
      </div>
    </div>
  </div> 

  <!-- <section id="countdown">
    <h2>Compte à Rebours avant les JO</h2>
    <div id="timer" class="display-4"></div>
  </section> -->

  <section id="about" class="container my-5">
    <!-- <h2 class="text-center mb-4">À Propos</h2> -->
    <p class="lead text-center">Bienvenue sur notre site dédié aux athlètes français participant aux Jeux Olympiques. Découvrez les épreuves, les athlètes et suivez leurs performances.</p>
  </section>

  <section id="countdown" class="container my-5 text-center">
    <h2 class="mb-4">Les Jeux Olympiques vont très bientôt commencer ! </h2>
    <div id="timer" class="display-4"></div>
  </section>

  
  
  <h1>DISCIPLINES</h1>
  <section class="athlete">

    <div class="discipline">
      <div class="image-container">
        <a href="judo.php">
          <img src="images/judo-4454835_1920.jpg" alt="judo">
          <p>Judo</p>
        </a>
      </div>

      <div class="image-container">
        <a href="teakwondo.php">

          <img src="images/taek.png" alt="taekwondo">
          <p>Taekwondo</p>
        </a>
      </div>



      <div class="image-container">
        <a href="lutte.php">
          <img src="images/lutte.jpg" alt="lutte">
          <p>Lutte</p>
        </a>
      </div>

      <div class="image-container">
        <a href="boxe.php">
          <img src="images/pexels-necrolix-960799.jpg" alt="boxe">
          <p>Boxe</p>
        </a>
      </div>

      <div class="image-container">
        <a href="karate.php">
          <img src="images/pexels-artempodrez-6253312.jpg" alt="karate">
          <p>Karaté</p>
        </a>
      </div>
    </div>

    <article class="mascotte"> 
      <div class="img-wrapper">
        <img src="images/mascotte_remove.png" alt="mascotte">
      </div>
    </article>

    <!-- <div class="articles-container">
      <article class="article">
        <h2>Les Jeux Olympiques 2024 : Une Cérémonie d'Ouverture qui va Révolutionner l'Événement</h2>
        <p>Les Jeux Olympiques de Paris 2024 promettent une cérémonie d'ouverture spectaculaire qui pourrait bien redéfinir les normes des cérémonies olympiques. Selon des sources proches du comité d'organisation, des innovations technologiques jamais vues auparavant, combinées à des performances artistiques époustouflantes, sont prévues pour émerveiller le monde entier. Découvrez ce qui rendra cette cérémonie unique et pourquoi elle pourrait rester gravée dans les mémoires pour les décennies à venir.</p>
      </article>
      <article class="article">
        <h2>Paris 2024 : Une Nouvelle Discipline Olympique pour les Jeux</h2>
        <p>Les Jeux Olympiques de 2024 pourraient voir l'introduction d'une nouvelle discipline sportive étonnante. Des discussions sont en cours pour inclure le e-sport comme discipline officielle, marquant un tournant dans l'histoire des jeux. Les fans de jeux vidéo du monde entier attendent avec impatience cette décision qui pourrait révolutionner les Jeux Olympiques. Apprenez-en plus sur cette possible inclusion et les réactions des athlètes et des fans.</p>
      </article>
      <article class="article">
        <h2>Des Mesures de Sécurité Sans Précédent pour Paris 2024</h2>
        <p>Avec les Jeux Olympiques 2024 se déroulant dans l'une des villes les plus emblématiques du monde, des mesures de sécurité sans précédent sont mises en place pour garantir la sécurité des athlètes et des spectateurs. Découvrez les technologies de pointe et les stratégies innovantes que la France déploie pour assurer que ces Jeux soient non seulement spectaculaires mais aussi sûrs pour tous. Plongez dans les détails de ce plan de sécurité impressionnant.</p>
      </article>
      <article class="article">
        <h2>Les Athlètes à Surveiller aux Jeux Olympiques de Paris 2024</h2>
        <p>Les Jeux Olympiques de 2024 à Paris s'annoncent comme une édition passionnante, avec une nouvelle génération d'athlètes prêts à marquer l'histoire. De jeunes prodiges à des vétérans en quête de leur dernier triomphe, découvrez les sportifs qui promettent de briller lors de cet événement mondial. Quels records pourraient être battus ? Qui sont les athlètes à ne pas manquer ? Explorez les histoires inspirantes de ces champions en devenir.</p>
      </article>
    </div> -->

    <div class="articles-container">
  <article class="article">
    <h2 class="dropdown-btn">Les Jeux Olympiques 2024 : Une Cérémonie d'Ouverture qui va Révolutionner l'Événement</h2>
    <p class="dropdown-content">Les Jeux Olympiques de Paris 2024 promettent une cérémonie d'ouverture spectaculaire qui pourrait bien redéfinir les normes des cérémonies olympiques. Selon des sources proches du comité d'organisation, des innovations technologiques jamais vues auparavant, combinées à des performances artistiques époustouflantes, sont prévues pour émerveiller le monde entier. Découvrez ce qui rendra cette cérémonie unique et pourquoi elle pourrait rester gravée dans les mémoires pour les décennies à venir.</p>
  </article>
  <article class="article">
    <h2 class="dropdown-btn">Paris 2024 : Une Nouvelle Discipline Olympique pour les Jeux</h2>
    <p class="dropdown-content">Les Jeux Olympiques de 2024 pourraient voir l'introduction d'une nouvelle discipline sportive étonnante. Des discussions sont en cours pour inclure le e-sport comme discipline officielle, marquant un tournant dans l'histoire des jeux. Les fans de jeux vidéo du monde entier attendent avec impatience cette décision qui pourrait révolutionner les Jeux Olympiques. Apprenez-en plus sur cette possible inclusion et les réactions des athlètes et des fans.</p>
  </article>
  <article class="article">
    <h2 class="dropdown-btn">Des Mesures de Sécurité Sans Précédent pour Paris 2024</h2>
    <p class="dropdown-content">Avec les Jeux Olympiques 2024 se déroulant dans l'une des villes les plus emblématiques du monde, des mesures de sécurité sans précédent sont mises en place pour garantir la sécurité des athlètes et des spectateurs. Découvrez les technologies de pointe et les stratégies innovantes que la France déploie pour assurer que ces Jeux soient non seulement spectaculaires mais aussi sûrs pour tous. Plongez dans les détails de ce plan de sécurité impressionnant.</p>
  </article>
  <article class="article">
    <h2 class="dropdown-btn">Les Athlètes à Surveiller aux Jeux Olympiques de Paris 2024</h2>
    <p class="dropdown-content">Les Jeux Olympiques de 2024 à Paris s'annoncent comme une édition passionnante, avec une nouvelle génération d'athlètes prêts à marquer l'histoire. De jeunes prodiges à des vétérans en quête de leur dernier triomphe, découvrez les sportifs qui promettent de briller lors de cet événement mondial. Quels records pourraient être battus ? Qui sont les athlètes à ne pas manquer ? Explorez les histoires inspirantes de ces champions en devenir.</p>
  </article>
</div>



  </section>

  <!-- <section class="section-quizz">
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
  </section> -->

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

  <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->
</body>

</html>