<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bcd1c15265.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/judo.css">
    <title>Jeux Olympique</title>
</head>
<body>
    <style>
        .imageDeFond img
{
   width: 100%;
  
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

 
  <section class="imageDeFond">
    <img src="images/judo_slide.webp" alt="boxe">
  </section>


   <h1>Judo</h1>

  <main>
    <div class="container">
      <h3>Athlètes de Judo - Paris 2024</h3>
      <h4>Hommes</h4>
      <div class="athletes-grid" id="athletes-grid">
          <!-- Athlète 1 -->
          <div class="athlete">
              <img src="images/Teddy Riner.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Teddy Riner</h2>
                  <p>Teddy Riner, né le 7 avril 1989 à Pointe-à-Pitre, est un judoka français évoluant dans la catégorie des plus de 100 kg, détenteur d'un record de onze titres de champion du monde, champion olympique à ... Wikipédia
                      Date/Lieu de naissance : 7 avril 1989 (Âge: 35 ans), Pointe-à-Pitre, Guadeloupe
                      Taille : 2,04 m
                      Poids : 140 kg
                      Médaille D'or : Judo aux Jeux olympiques d'été de 2020 - Par équipes, 3 <span><a href="https://www.google.fr/url?sa=i&url=https%3A%2F%2Ffr.wikipedia.org%2Fwiki%2FTeddy_Riner&psig=AOvVaw0KLaF5r315WCkrgZu4d-21&ust=1719628072109000&source=images&cd=vfe&opi=89978449&ved=0CAYQrpoMahcKEwiQpef3of2GAxUAAAAAHQAAAAAQBA">autres</a></span></p>
              </div>
          </div>
  
         
          <div class="athlete">
              <img src="images/Alpha Djalo.jpeg" alt="Athlète 2">
              <div class="bio">
                  <h2>Alpha Djalo</h2>
                  <p>Alpha Oumar Djalo est médaillé d'or dans la catégorie des moins de 81 kg aux Jeux de la Francophonie de 2017 à Abidjan1et champion de France de judo en 2021 à Perpignan. Il est médaillé d'argent par équipes aux Championnats du monde de judo 2019 à Tokyo.
  
                      Ses meilleurs résultats en individuel restent jusqu'à aujourd'hui la médaille d'or remportée au Grand-Prix de Zagreb2 en 2022 et sa médaille d'argent remportée au Grand Slam de Düsseldorf en 20183, tournoi international majeur. Médaillé de bronze sur les Grand Slam de Tel Aviv en 2022, Tokyo en 2022 , Antalya en 2023
                      
                      En février 2023, il remporte la médaille de Bronze au Grand Chelem de Paris.
                      
                      Il remporte aux Championnats d'Europe de judo 2023 à Montpellier la médaille de bronze dans la catégorie des moins de 81 kg4. Trois semaines après cette compétition, la Fédération française de judo annonce la sélection de Djalo pour les Jeux olympiques de 2024 disputés à Paris</p>
              </div>
          </div>
  
         
          <div class="athlete">
              <img src="images/Aurélien DIESSE.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Aurélien DIESSE</h2>
                  <p>Aurélien Diesse, né le 16 octobre 1997 à Bondy1, est un judoka français. Il est notamment champion de France senior 2019, 2020 & 2022, vice-champion du monde avec l’Equipe de France et médaillé de bronze aux Jeux européens de 2019
  
                      Carrière
                      Non sélectionné en Équipe de France cadets, il remporte durant l’été 2014, et au terme d’une saison compliquée, la Coupe de France juniors alors qu’il n’est encore que cadet.
                      
                      Il est ensuite sélectionné en Équipe de France pour les Championnats d’Europe et du Monde lors de chacune de ses années juniors. Il remporte la médaille de bronze aux Championnats d’Europe de 2016 à Malaga, revenant tout juste d’une rupture des ligaments croisés, avec moins d’une dizaine d’entraînements après son retour de blessure et alors qu'il lui reste encore une saison dans la catégorie des moins de 21 ans (junior).
                      
                      L’année suivante, il est sacré champion d'Europe junior dans la catégorie des moins de 90 kg à Maribor (Slovénie) en éliminant au premier tour le futur médaillé d’argent des Jeux olympiques de Tokyo, l’Allemand Eduard Trippel. Il finit sa saison demi-finaliste aux Championnats du Monde junior <br> <span><a href="https://fr.wikipedia.org/wiki/Aur%C3%A9lien_Diesse">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/joan-Benjamin Gaba.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>joan-Benjamin Gaba</h2>
                  <p>Joan-Benjamin Gaba évolue dans la catégorie des moins de 73 kg. Il remporte la médaille d'argent par équipes aux Championnats du monde de judo 2021 à Budapest1, aux Championnats du monde de judo 2022 à Tachkent et aux Championnats du monde de judo 2023 à Doha.
  
                      En novembre 2023, il est sacré champion de France dans cette catégorie à Caen, battant en finale Guillaume Chaine2.
                      
                      Il remporte la médaille de bronze aux Championnats d'Europe de judo 2024 à Zagreb <br> <span><a href="https://fr.wikipedia.org/wiki/Joan-Benjamin_Gaba">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/Luka Mkheidze.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Luka Mkheidze</h2>
                  <p>Luka Mkheidze, né le 5 janvier 1996 à Tbilissi, en Géorgie, est un judoka français1 évoluant dans la catégorie des moins de 60 kg.
  
                      Biographie
                      Champion de Géorgie en benjamin, il doit fuir son pays avec sa famille en 2008, à l’âge de 12 ans, après la deuxième guerre d’Ossétie du Sud. Après huit mois passés en Pologne, il arrive en région parisienne en 2010 avec le statut de réfugié politique2.
                      
                      Carrière sportive
                      Luka Mkheidze est champion de France juniors en 20143.
                      
                      En 2018, il est battu au troisième tour des championnats du monde par le Russe Robert Mshvidobadze4.
                      
                      Il se classe troisième des grands chelems de Budapest, en 2020, et de Tachkent, en 2021.
                      
                      En 2021, il atteint la finale des championnats d'Europe dans la catégorie des moins de 60 kg, où il est battu par l'Espagnol Francisco Garrigós5, puis remporte la médaille de bronze aux Jeux olympiques de Tokyo dans la même catégorie6, en s'imposant contre le Coréen Kim Won-jin au golden score7 ; il est la première médaille française de ces jeux <br> <span><a href="https://fr.wikipedia.org/wiki/Luka_Mkheidze">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/Maxime-Gael Ngayap Hambou.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Maxime-Gael Ngayap</h2>
                  <p>Maxime-Gaël Ngayap Hambou, né le 22 juin 2001, est un judoka français.
  
                      Carrière
                      Maxime-Gaël Ngayap Hambou est médaillé d'argent par équipe mixte lors des Championnats du monde de judo 2023 à Doha ; il est battu en finale par le Japonais Goki Tajima en moins de 90 kg1. <br> <span><a href="https://fr.wikipedia.org/wiki/Maxime-Ga%C3%ABl_Ngayap_Hambou">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/walide-Khyar.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>walide-Khyar</h2>
                  <p>Walide Khyar (né le 9 juin 1995 à Bondy) est un judoka franco-marocain, en activité et évoluant dans la catégorie des - 60 kg puis des - 66 kg.
  
                      Biographie
                          Cette section est vide, insuffisamment détaillée ou incomplète. Votre aide est la bienvenue ! Comment faire ?
                      Vice-champion d'Europe cadet en juin 20111, il remporte la médaille d'or lors du Festival olympique de la jeunesse européenne la même année2.
                      
                      Depuis 2016, il est membre de l'équipe de France Douane3.
                      
                      Il remporte le championnat d'Europe 2016 à Kazan en moins de 60 kg4. Présent ensuite aux Jeux olympiques 2016, il y est battu au deuxième tour5.
                      
                      Il n'est pas sélectionné pour les Jeux olympiques 2020 de Tokyo et le quota français est attribué à Luka Mkheidze qui est médaillé de bronze. En novembre 2021, son changement de catégorie est officialisé, il rejoint les moins de 66 kg en vue des Jeux olympiques de Paris 2024 <br> <span><a href="https://fr.wikipedia.org/wiki/Walide_Khyar">autres</a></span></p>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <h3>Athlètes de Judo - Paris 2024</h3>
      <h4>Femmes</h4>
      <div class="athletes-grid" id="athletes-grid">
          <!-- Athlète 1 -->
          <div class="athlete">
              <img src="images/Teddy Riner.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Amandine Buchard</h2>
                  <p>Teddy Riner, né le 7 avril 1989 à Pointe-à-Pitre, est un judoka français évoluant dans la catégorie des plus de 100 kg, détenteur d'un record de onze titres de champion du monde, champion olympique à ... Wikipédia
                      Date/Lieu de naissance : 7 avril 1989 (Âge: 35 ans), Pointe-à-Pitre, Guadeloupe
                      Taille : 2,04 m
                      Poids : 140 kg
                      Médaille D'or : Judo aux Jeux olympiques d'été de 2020 - Par équipes, 3 <span><a href="https://www.google.fr/url?sa=i&url=https%3A%2F%2Ffr.wikipedia.org%2Fwiki%2FTeddy_Riner&psig=AOvVaw0KLaF5r315WCkrgZu4d-21&ust=1719628072109000&source=images&cd=vfe&opi=89978449&ved=0CAYQrpoMahcKEwiQpef3of2GAxUAAAAAHQAAAAAQBA">autres</a></span></p>
              </div>
          </div>
  
          <!-- Athlète 2 -->
          <div class="athlete">
              <img src="images/Clarisse Agbégnénou.jpg" alt="Athlète 2">
              <div class="bio">
                  <h2>Clarisse Agbégnénou</h2>
                  <p>Alpha Oumar Djalo est médaillé d'or dans la catégorie des moins de 81 kg aux Jeux de la Francophonie de 2017 à Abidjan1et champion de France de judo en 2021 à Perpignan. Il est médaillé d'argent par équipes aux Championnats du monde de judo 2019 à Tokyo.
  
                      Ses meilleurs résultats en individuel restent jusqu'à aujourd'hui la médaille d'or remportée au Grand-Prix de Zagreb2 en 2022 et sa médaille d'argent remportée au Grand Slam de Düsseldorf en 20183, tournoi international majeur. Médaillé de bronze sur les Grand Slam de Tel Aviv en 2022, Tokyo en 2022 , Antalya en 2023
                      
                      En février 2023, il remporte la médaille de Bronze au Grand Chelem de Paris.
                      
                      Il remporte aux Championnats d'Europe de judo 2023 à Montpellier la médaille de bronze dans la catégorie des moins de 81 kg4. Trois semaines après cette compétition, la Fédération française de judo annonce la sélection de Djalo pour les Jeux olympiques de 2024 disputés à Paris</p>
              </div>
          </div>
  
         
          <div class="athlete">
              <img src="images/Madelaine Malonga.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Madelaine Malonga</h2>
                  <p>Aurélien Diesse, né le 16 octobre 1997 à Bondy1, est un judoka français. Il est notamment champion de France senior 2019, 2020 & 2022, vice-champion du monde avec l’Equipe de France et médaillé de bronze aux Jeux européens de 2019
  
                      Carrière
                      Non sélectionné en Équipe de France cadets, il remporte durant l’été 2014, et au terme d’une saison compliquée, la Coupe de France juniors alors qu’il n’est encore que cadet.
                      
                      Il est ensuite sélectionné en Équipe de France pour les Championnats d’Europe et du Monde lors de chacune de ses années juniors. Il remporte la médaille de bronze aux Championnats d’Europe de 2016 à Malaga, revenant tout juste d’une rupture des ligaments croisés, avec moins d’une dizaine d’entraînements après son retour de blessure et alors qu'il lui reste encore une saison dans la catégorie des moins de 21 ans (junior).
                      
                      L’année suivante, il est sacré champion d'Europe junior dans la catégorie des moins de 90 kg à Maribor (Slovénie) en éliminant au premier tour le futur médaillé d’argent des Jeux olympiques de Tokyo, l’Allemand Eduard Trippel. Il finit sa saison demi-finaliste aux Championnats du Monde junior <br> <span><a href="https://fr.wikipedia.org/wiki/Aur%C3%A9lien_Diesse">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/Marie-Eve Gahié.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Marie-Eve Gahié</h2>
                  <p>Joan-Benjamin Gaba évolue dans la catégorie des moins de 73 kg. Il remporte la médaille d'argent par équipes aux Championnats du monde de judo 2021 à Budapest1, aux Championnats du monde de judo 2022 à Tachkent et aux Championnats du monde de judo 2023 à Doha.
  
                      En novembre 2023, il est sacré champion de France dans cette catégorie à Caen, battant en finale Guillaume Chaine2.
                      
                      Il remporte la médaille de bronze aux Championnats d'Europe de judo 2024 à Zagreb <br> <span><a href="https://fr.wikipedia.org/wiki/Joan-Benjamin_Gaba">autres</a></span></p>
              </div>
          </div>
         
          <div class="athlete">
              <img src="images/Romane Dicko.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Romane Dicko</h2>
                  <p>Luka Mkheidze, né le 5 janvier 1996 à Tbilissi, en Géorgie, est un judoka français1 évoluant dans la catégorie des moins de 60 kg.
  
                      Biographie
                      Champion de Géorgie en benjamin, il doit fuir son pays avec sa famille en 2008, à l’âge de 12 ans, après la deuxième guerre d’Ossétie du Sud. Après huit mois passés en Pologne, il arrive en région parisienne en 2010 avec le statut de réfugié politique2.
                      
                      Carrière sportive
                      Luka Mkheidze est champion de France juniors en 20143.
                      
                      En 2018, il est battu au troisième tour des championnats du monde par le Russe Robert Mshvidobadze4.
                      
                      Il se classe troisième des grands chelems de Budapest, en 2020, et de Tachkent, en 2021.
                      
                      En 2021, il atteint la finale des championnats d'Europe dans la catégorie des moins de 60 kg, où il est battu par l'Espagnol Francisco Garrigós5, puis remporte la médaille de bronze aux Jeux olympiques de Tokyo dans la même catégorie6, en s'imposant contre le Coréen Kim Won-jin au golden score7 ; il est la première médaille française de ces jeux <br> <span><a href="https://fr.wikipedia.org/wiki/Luka_Mkheidze">autres</a></span></p>
              </div>
          </div>
         
          <div class="athlete">
              <img src="images/Sarah leonie CYSIQUE.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Sarah leonie</h2>
                  <p>Maxime-Gaël Ngayap Hambou, né le 22 juin 2001, est un judoka français.
  
                      Carrière
                      Maxime-Gaël Ngayap Hambou est médaillé d'argent par équipe mixte lors des Championnats du monde de judo 2023 à Doha ; il est battu en finale par le Japonais Goki Tajima en moins de 90 kg1. <br> <span><a href="https://fr.wikipedia.org/wiki/Maxime-Ga%C3%ABl_Ngayap_Hambou">autres</a></span></p>
              </div>
          </div>
          
          <div class="athlete">
              <img src="images/Shirine Boukli.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Shirine Boukli</h2>
                  <p>Walide Khyar (né le 9 juin 1995 à Bondy) est un judoka franco-marocain, en activité et évoluant dans la catégorie des - 60 kg puis des - 66 kg.
  
                      Biographie
                          Cette section est vide, insuffisamment détaillée ou incomplète. Votre aide est la bienvenue ! Comment faire ?
                      Vice-champion d'Europe cadet en juin 20111, il remporte la médaille d'or lors du Festival olympique de la jeunesse européenne la même année2.
                      
                      Depuis 2016, il est membre de l'équipe de France Douane3.
                      
                      Il remporte le championnat d'Europe 2016 à Kazan en moins de 60 kg4. Présent ensuite aux Jeux olympiques 2016, il y est battu au deuxième tour5.
                      
                      Il n'est pas sélectionné pour les Jeux olympiques 2020 de Tokyo et le quota français est attribué à Luka Mkheidze qui est médaillé de bronze. En novembre 2021, son changement de catégorie est officialisé, il rejoint les moins de 66 kg en vue des Jeux olympiques de Paris 2024 <br> <span><a href="https://fr.wikipedia.org/wiki/Walide_Khyar">autres</a></span></p>
              </div>
          </div>
      </div>
  </div>
  </main>
<script src="script.js"></script>

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
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>