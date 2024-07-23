<?php
include 'bdd.php';

// Récupérer les actualités
$sql = "SELECT * FROM news";
$stmt = $conn->prepare($sql);
$stmt->execute();
$news = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Actualités des Jeux Olympiques 2024</title> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles_actu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>
</head>
<body>

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

  
<div class="slideshow-container">
        <div class="slide fade">
            <img src="actus1.jpg" style="width:100%">
            <div class="text" id="text1"></div>
            <div class="text_in">
            <h2>Actualités Paris 2024</h2>
            <P>Vivez l'actualité sur le sport de combat de paris 2024</P>
            </div>
        </div>
        <div class="slide fade">
            <img src="actus2.jpg" style="width:100%">
            <div class="text" id="text2"></div>
        </div>
        <div class="slide fade">
            <img src="actus3.jpg" style="width:100%">
            <div class="text" id="text3"></div>
        </div>
    </div>

    <script src="script_actu.js"></script>
    <br>
    <section>
    <h1>Actualités des Jeux Olympiques 2024</h1>
    <?php foreach ($news as $new): ?>
        <div>
            <h2><?php echo htmlspecialchars($new['title']); ?></h2>
            <p><?php echo htmlspecialchars($new['content']); ?></p>
            <a href="news.php?id=<?php echo $new['id']; ?>">Voir les commentaires</a>
        </div>
        <hr>
    </section>
        
    <?php endforeach; ?>

</body>
</html>
