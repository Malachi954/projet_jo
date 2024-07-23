<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', '');
if (isset($_GET['id']) AND $_GET['id']>0){
    $takeid = intval($_GET['id']);
    $req = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $req->execute(array( $takeid));

    $takeinfo = $req->fetch();
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Profil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body>

<style>
  main
  {
    margin: 100px;
  }
</style>

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
                            <a class="dropdown-item" href="profil.php">Profil</a>
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

    <!-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Profil Utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="firstName">Prénom</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Nom</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse</label>
                                <input type="text" class="form-control" id="address" placeholder="Entrez votre adresse">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-dark">
                        <div class="card-block text-center text-white">
                            <!-- <i class="fas fa-user-tie fa-7x mt-5"></i> -->
                            <i class="fa-solid fa-user"></i>
                            <h2 class="font-weight-bold mt-4"><?=$user['pseudo']?></h2>
                            <p>XXXXXXX</p>
                            <!-- <i class="far fa-edit fa-2x mb-4"></i> -->
                            <i class="fa-regular fa-pen-to-square"></i>

                        </div>

                    </div>
                <div class="col-sm-8 bg-white">
                    <h3 class="mt-3"> Info </h3>
                    <hr class="badge-dark mt-0 w-250">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Email :</p>
                            <p class="text-muted"> <? echo $takeinfo?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold">MDP :</p>
                            <p class="text-muted">XXXXXX</p>
                        </div>
                    </div>
                    <h4 class="mt-3"> Projets </h4>
                    <hr class="bg-dark">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold">Nom :</p>
                            <p class="text-muted">XXXXXX</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold"> Groupe </p>
                            <p class="text-muted"> XXXXXX</p>
                        </div>
                    </div>
                    <hr class="bg-dark">
                    <!-- <i class="fa fa-power-off mt-2 fa-2x"></i> -->
                   <a href="deconnexion.php"> <i class="fa-solid fa-power-off"></i></a>
                    


                </div>


                </div>

            </div>

        </div>
    </div>
    </main>
    

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
