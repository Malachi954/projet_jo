<?php
session_start();
include 'bdd.php';

$news_id = $_GET['id'];

// Récupérer les détails de l'actualité
$sql = "SELECT * FROM news WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $news_id);
$stmt->execute();
$news = $stmt->fetch();

// Récupérer les commentaires
$sql = "SELECT * FROM comments WHERE news_id = :news_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':news_id', $news_id);
$stmt->execute();
$comments = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- <title><?php echo htmlspecialchars($news['title']); ?></title> -->
    <link rel="stylesheet" href="css/styles_actu.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>

</head>
<style>
   body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1, h2 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

p {
    line-height: 1.6;
    color: #666;
}

.comment {
    border-bottom: 1px solid #eaeaea;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.comment p {
    margin: 0;
}

.comment a {
    color: #509acc;
    text-decoration: none;
    margin-right: 10px;
    transition: color 0.3s ease;
}

.comment a:hover {
    color: #0056b3;
}

form {
    margin: 200px;
    display: flex;
    flex-direction: column;
    border: 1px solid grey;
    padding: 40px;
    border-radius: 12Px;
}

form p {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
}

form input[type="text"], form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s ease;
}

form input[type="text"]:focus, form textarea:focus {
    border-color: #509acc;
    outline: none;
}

form textarea {
    resize: vertical;
    height: 100px;
}

form input[type="submit"] {
    border: none;
    padding: 10px 20px;
    background-color: #509acc;
    color: white;
    border-radius: 5px;
    text-transform: capitalize;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
    cursor: pointer;
    align-self: flex-start;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

.message {
    text-align: center;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    color: #fff;
    background-color: #509acc;
}

.message.error {
    background-color: #e74c3c;
}

@media (max-width: 600px) {
    .container {
        padding: 10px;
    }
    
    form input[type="submit"] {
        width: 100%;
        text-align: center;
    }
}

</style>
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
    
    <hr>
    <h2>Commentaires</h2>
    <?php foreach ($comments as $comment): ?>
        <div>
            <p><?php echo htmlspecialchars($comment['username']); ?>: <?php echo htmlspecialchars($comment['comment']); ?></p>
            <a href="edit_comment.php?id=<?php echo $comment['id']; ?>">Modifier</a> | 
            <a href="delete_comment.php?id=<?php echo $comment['id']; ?>">Supprimer</a>
        </div>
    <?php endforeach; ?>
    <hr>
    <h2>Laisser un commentaire</h2>
    <form action="add_comment.php" method="post">
        <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
        <p>Nom: <input type="text" name="username"></p>
        <p>Commentaire: <textarea name="comment"></textarea></p>
        <p><input type="submit" value="Envoyer"></p>
    </form>

    <div class="mousemove"></div>


    <script src="script_actu.js"></script>
    <script src="app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->
</body>
</html>
