<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: inscrit.php");
    exit();
}

$user_id = $_SESSION['id'];
$message = "";

try {
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo = $_POST['pseudo'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

    $sql = "UPDATE users SET pseudo = :pseudo, mdp = :mdp WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $message = "Profil mis à jour avec succès!";
    } else {
        $message = "Erreur lors de la mise à jour du profil.";
    }
}

$sql = "SELECT pseudo FROM users WHERE id = :id";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            /* height: 100vh; */
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            margin: 100px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        p {
            color: #d9534f; /* Couleur rouge pour les messages d'erreur */
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
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


   <div class="container">
  
   <h1>Votre Profil</h1>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="profil_test.php">
        <label for="pseudo">Pseudo:</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo htmlspecialchars($user['pseudo']); ?>" required>
        <br>
        <label for="mdp">Nouveau Mot de passe:</label>
        <input type="password" id="mdp" name="mdp" required>
        <br>
        <input type="submit" value="Mettre à jour le profil">
    </form>

   </div>

    <div class="mousemove"></div>

<!-- <footer>
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
</footer> -->

<script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->

</body>
</html>
