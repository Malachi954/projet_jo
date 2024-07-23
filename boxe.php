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
        .athletes-grid{
            padding: 20px;
        }

        .athlete img {
    width: 100%;
    height: 100%;
    cursor: pointer;
    object-fit: cover;
}

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

  <section class="imageDeFond">
    <img src="images/boxe.webp" alt="boxe">
  </section>


   <h1>Boxe</h1>

  <main>
    <div class="container">
      <h3>Boxeur français- Paris 2024</h3>
      <h4>Hommes</h4>
      <div class="athletes-grid" id="athletes-grid">
          <!-- Athlète 1 -->
          <div class="athlete">
              <img src="images/Billal Bennama.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Billal Bennama</h2>
                  <p>  Né de parents algériens immigrés, la boxe est très vite devenue une affaire familiale. Son entraîneur de toujours est son père, Mohamed Bennama réputé pour être l'un des meilleurs entraîneurs national de boxe1. Son frère Abib ainsi que sa sœur Rym ont, eux aussi, embrassé une carrière de boxeur. La carrière de Billal est lancée à la suite de l'obtention de deux titres de champion de France de boxe amateur obtenus en 2017, alors qu'il n'avait que 19 ans, et 2018 dans la catégorie des poids mi-mouches1. Il est également médaillé de bronze dans la catégorie des moins de 52 kg (poids mouches) aux championnats du monde de boxe amateur 2019 à Iekaterinbourg. En mars 2020, à Londres, il a obtenu sa qualification pour les jeux olympiques de Tokyo il est le premier français
                    qualifié et espoir de médaille pour le pays 2. Mais il se fait éliminer en 8e de finale par Saken Bibossinov3. 
Il est sacré champion d'Europe 2022 dans la catégorie des poids coqs (-54 kg) à Erevan4. Il remporte ensuite la médaille d'argent des Championnats du monde de boxe amateur 2023 dans la catégorie des poids mouches à Tachkent5.
 
Il est médaillé d'or dans la catégorie des poids mouches aux Jeux européens de 2023 à Nowy Targ6.
 
Aux Championnats d'Europe de boxe amateur 2024 à Belgrade, il est médaillé d'argent dans la catégorie des poids coqs<span><a href="https://fr.wikipedia.org/wiki/Billal_Bennama">autres</a></span></p>
              </div>
          </div>
  
          <!-- Athlète 2 -->
          <div class="athlete">
              <img src="images/Sofiane Oumiha.jpeg" alt="Athlète 2">
              <div class="bio">
                  <h2>Sofiane Oumiha</h2>
                  <p>Sofiane Oumiha est un boxeur français né le 23 décembre 1994 à Toulouse évoluant dans la catégorie des poids légers2,3. Il est vice-champion olympique aux jeux de Rio de 2016 et champion du monde des poids légers à Hambourg en 2017 à Belgrade en 2021 et en Ouzbékistan en 2023 . Il est également médaillé d'or aux Jeux européens de 2023.
 
                    Biographie
                    Boxeur amateur
                    Sofiane Oumiha, fils de Mohamed Oumiha, émigré du Maroc4, suit les traces de son père lorsqu'il commence la boxe à l'âge de 7 ans5. Après un court arrêt, il revient à la boxe alors qu'il a 9 ans et devient vice-champion de France6. Le boxeur du quartier de la Reynerie enchaîne alors huit années d’invincibilité4,6 et remporte à deux reprises le critérium national cadets en 2009 et 20105. Parallèlement, il pratique le rugby à 7 jusqu'à ses 18 ans7.
                   
                    Licencié au Boxing Toulouse Bagatelle, Oumiha se révèle lors de l'année 2012. Junior, il est champion de France dans sa catégorie des poids légers (moins de 60 kg) et s'envole pour les championnats du monde lors desquels il décroche une médaille de bronze. Oumiha confirme son statut de jeune boxeur talentueux en remportant les Jeux méditerranéens de Mersin en 2013. Ses performances permettent au boxeur toulousain d'intégrer l'INSEP l'année suivante8. Son passage chez les seniors est un réussite avec deux titres de champion de France amateurs en 2014 et 2015. Représentant de la France lors des Jeux européens de Bakou en 2015, Sofiane Oumiha doit se contenter d'une médaille d'argent après avoir été battu en finale9.
                   
                    Quart de finaliste des championnats du monde 2015, il manque la qualification directe pour les jeux olympiques d'été de 2016. Il obtient sa place dans la délégation française pour Rio quelques semaines plus tard en dominant le tournoi qualificatif olympique européen. Oumiha est médiateur jeunesse à la ville de Toulouse5.
                   
                    Au premier tour du tournoi olympique, il domine Teófimo López par décision unanime des trois juges10. Opposé au vétéran thaïlandais Amnat Ruenroeng en huitièmes de finale, Oumiha perd le premier round avant de faire compter à plusieurs reprises son adversaire qui est arrêté par l'arbitre dans le troisième round11. Ce succès contre l'ancien champion du monde professionnel IBF ouvre à Oumiha les portes des quarts de finale. En quart de finale, il s'assure une médaille olympique avec une nouvelle victoire par décision contre l'Azéri Albert Selimov6. Vainqueur de Dorjnyambuu Otgondalai en demi-finale, il se qualifie pour la finale olympique12. Il s'incline face au Brésilien Robson Conceição et décroche donc une médaille d'argent13,14.
                   
                    Le vice-champion olympique décide de rester dans les rangs amateurs pour viser le titre à Tokyo et de s'engager dans les World Series of Boxing15. Une lésion au métacarpe de la main droite l'oblige à déclarer forfait pour les demi-finales du championnat de France amateurs en février 201716.
                   
                    Le 2 septembre 2017, il remporte le titre mondial de boxe amateur à Hambourg dans la catégorie des poids légers (-60 kg) en battant le Cubain, double tenant du titre, Lázaro Álvarez17.
                   
                    Porte-drapeau de la délégation française aux Jeux méditerranéens de 2018, Sofiane Oumiha assume son statut de favori en remportant la compétition18. En octobre, il inaugure sa salle de boxe anglaise dans le quartier Papus à Toulouse19. Son club de boxe s'y installe avec pour devise « la victoire aime l'effort »19. Aidé par son oncle Medhi, par ailleurs son entraîneur, il se consacre au développement du club en complément de son parcours sportif20,19,21.
                   
                    Il est médaillé d'argent des moins de 64 kg aux Jeux européens de 2019.
                   
                    Le 13 mai 2023, il bat le Cubain Erislandy Borges en finale des championnats du monde amateurs catégorie -60 Kg à Tachkent (Ouzbekistan) et devient ainsi le premier triple champion du monde français en boxe amateur22.
                   
                    Il est médaillé d'or dans la catégorie des poids légers aux Jeux européens de 2023 à Nowy Targ <span><a href="https://fr.wikipedia.org/wiki/Sofiane_Oumiha"> <br> Autres</a></span></p>
              </div>
          </div>
  
          <!-- Ajoutez d'autres athlètes ici selon le même modèle -->
          <div class="athlete">
              <img src="images/makan.webp" alt="Athlète 1">
              <div class="bio">
                  <h2>Makan Traoré</h2>
                  <p>Makan Traoré est médaillé de bronze dans la catégorie des poids welters aux Jeux européens de 2023 à Nowy Targ, ce qui le qualifie pour les Jeux olympiques de Paris en 2024
                    <br> <span><a href="https://fr.wikipedia.org/wiki/Makan_Traor%C3%A9_(boxe_anglaise)">Autres</a></span></p>
              </div>
          </div>
          <!-- Ajoutez d'autres athlètes ici selon le même modèle --> 
          <div class="athlete">
              <img src="images/Djamili-Dini Abou.jpeg" alt="Athlète 1">
              <div class="bio">
                  <h2>Djamili-Din</h2>
                  <p>Djamili-Dini Aboudou Moindze est un boxeur français né le 16 février 1996 à Grande-Synthe1.
 
                    Carrière sportive
                    Après deux titres nationaux juniors en 2013 et 20142, Djamili-Dini Aboudou est sacré champion de France dans la catégorie des poids super-lourds en 2016 et 20173.
                   
                    Il est médaillé de bronze aux championnats d'Europe 2017 dans la catégorie des poids super-lourds4 et aux Jeux méditerranéens de 2018. Djamili Dini Aboudou-Moindze est de nouveau sacré champion de France en 2018 puis en 2019 dans la catégorie des super-lourds5. Il est médaillé de bronze aux Jeux méditerranéens de 2022.<br> <span><a href="https://fr.wikipedia.org/wiki/Djamili-Dini_Aboudou">autres</a></span></p>
              </div>
          </div>
          <!-- Ajoutez d'autres athlètes ici selon le même modèle -->
          <!-- <div class="athlete">
              <img src="images/Wassila Lkhadri " alt="Athlète 1">
              <div class="bio">
                  <h2>Wassila Lkhadri </h2>
                  <p>Wassila Lkhadri est une boxeuse française née le 14 septembre 1995 à Ajaccio.
 
                    Carrière sportive
                    En 2014, elle est sacrée championne de France amateur en moins de 54 kg (poids coqs)1 puis remporte la médaille de bronze aux championnats d'Europe amateur à Bucarest en moins de 51 kg (poids mouches)2. Elle est médaillée de bronze dans la catégorie des poids mouches aux championnats d'Europe amateur 2019 à Alcobendas3.
                   
                    Aux Championnats du monde féminins de boxe amateur 2023 à New Delhi, elle obtient la médaille de bronze dans la catégorie des moins de 50 kg4.
                   
                    Aux Jeux européens 2023, le 28 juin 2023, elle se qualifie pour les épreuves de boxe aux Jeux olympiques d'été de 2024 <span><a href="https://fr.wikipedia.org/wiki/Wassila_Lkhadiri">autres</a></span></p>
              </div>
          </div> -->
         
         
      </div>
  </div>
  <div class="container">
      <h3>Boxeur français - Paris 2024</h3>
      <h4>Femmes</h4>
      <div class="athletes-grid" id="athletes-grid">
          <!-- Athlète 1 -->
          <div class="athlete">
            <img src="images/Wassila Lkhadiri (1).jpg" alt="Athlète 1">
            <div class="bio">
                <h2>Wassila Lkhadri </h2>
                <p>Wassila Lkhadri est une boxeuse française née le 14 septembre 1995 à Ajaccio.

                  Carrière sportive
                  En 2014, elle est sacrée championne de France amateur en moins de 54 kg (poids coqs)1 puis remporte la médaille de bronze aux championnats d'Europe amateur à Bucarest en moins de 51 kg (poids mouches)2. Elle est médaillée de bronze dans la catégorie des poids mouches aux championnats d'Europe amateur 2019 à Alcobendas3.
                 
                  Aux Championnats du monde féminins de boxe amateur 2023 à New Delhi, elle obtient la médaille de bronze dans la catégorie des moins de 50 kg4.
                 
                  Aux Jeux européens 2023, le 28 juin 2023, elle se qualifie pour les épreuves de boxe aux Jeux olympiques d'été de 2024 <span><a href="https://fr.wikipedia.org/wiki/Wassila_Lkhadiri">autres</a></span></p>
            </div>
        </div>
  
          <!-- Athlète 2 -->
          <div class="athlete">
              <img src="images/Amina Zidani.jpg" alt="Athlète 2">
              <div class="bio">
                  <h2>Amina Zidani</h2>
                  <p>Amina Zidani est une boxeuse française, née le 23 août 1993 à Villepinte, en Seine-Saint-Denis.
                    Après avoir pratiqué le karaté au cours de son enfance, Amina intègre une équipe de basket-ball où elle est frustrée de jouer les seconds rôles.
                    C’est par hasard, en visionnant un reportage sur le légendaire Mohamed Ali, qu'elle découvre qu'il a une fille, Laila Ali, qui est également boxeuse : « J'aimais sa façon d'être et son charisme », déclare-t-elle1. Amina Zidani se lance donc la boxe anglaise féminine.
                    Débuts sportifs[modifier | modifier le code]
                    Amina Zidani débute la boxe anglaise tardivement, à 18 ans, en janvier 2012, dans le club du Havre : la Don’t Panik Team. Amina devient championne de France amateur en 2016 dans la catégorie des poids super-légers (moins de 64 kg), après seulement quatre années de pratique.
                    Ce titre lui permet d'être sélectionnée en équipe de France2, et ainsi représenter la France lors des compétitions et des tournois internationaux. Les années suivantes, Amina remporte consécutivement 4 nouveaux titres de championne de France : en 20173, 20184, 20195 et 20206. Elle évolue en 2023 dans la catégorie olympique des poids plumes (moins de 57 kg).
                    Olympiade 2020-2024[modifier | modifier le code]
                    Depuis 2019, la réglementation du Comité international olympique permet aux boxeuses professionnelles de concourir aux Jeux olympiques. Amina passe professionnelle en avril 20217 afin de combiner boxe amateure et professionnelle. Elle remporte en juillet 2021 le titre de championne de France professionnelle des poids super-plumes lors de son deuxième combat professionnel8,9.
                    Aux Jeux européens 2023, le 28 juin 2023, elle se qualifie pour les épreuves de boxe aux Jeux olympiques d'été de 2024 <br> <span><a href="https://fr.wikipedia.org/wiki/Amina_Zidani">autres</a></span></p>
              </div>
          </div>
  
         
          <div class="athlete">
              <img src="images/Estelle Mossely.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Estelle Mossely,</h2>
                  <p>Estelle Mossely, née le 19 août 1992 à Créteil1, est une boxeuse française qui combat en poids légers (moins de 60 kg). Elle est la première boxeuse française à remporter le titre aux Jeux olympiques et également la première Française sacrée championne du monde après un titre olympique.
                    Née d'un père d'origine congolaise2, Pascal Mossely, et d'une mère d'origine ukrainienne3, Estelle Mossely est membre du club Red Star de Champigny-sur-Marne en région parisienne1. Étant plus jeune, elle a essayé la danse classique, la natation et le patinage artistique.
Carrière dans la boxe[modifier | modifier le code]
Estelle Mossely commence la boxe à 12 ans après l’avoir découverte par hasard à la télévision. Elle est passée par l’INSEP pour s’entrainer et est maintenant licenciée au Boxing Lyon United où elle est accompagnée de Kamel Hasni qu’elle a côtoyé en équipe de France auparavant.
En 2016, le jour de son anniversaire, elle est sacrée championne olympique aux Jeux de Rio en s'imposant face à la Chinoise Yin Junhua4.
En 2018, avec Antoine Griezmann et Marie-Amélie Le Fur, elle est nommée ambassadrice de la campagne contre les discriminations lancée par la ministre des Sports Laura Flessel5.
En 2020, elle réalise un stage d'un mois et demi aux États-Unis peu avant le confinement pour rejoindre sa famille en France.
En 2022, elle signe un contrat avec Probellum pour trois ans avec l’ambition de conquérir un titre professionnel et l’or olympique aux Jeux de Paris 2024.
Elle est médaillée de bronze dans la catégorie des poids légers aux Jeux européens de 2023 à Nowy Targ, battue en demi-finales par l'Irlandaise Kellie Harrington <br> <span><a href="https://fr.wikipedia.org/wiki/Estelle_Mossely">autres</a></span>
                  </p>
              </div>
          </div>
         
          <div class="athlete">
              <img src="images/davina.jpg" alt="Athlète 1">
              <div class="bio">
                  <h2>Davina Michel</h2>
                  <p>Davina Michel est une boxeuse française née le 29 décembre 1997 en Martinique.
                    Carrière[modifier | modifier le code]
                    Sa carrière amateur est principalement marquée par une médaille de bronze remportée aux championnats du monde 2022 à Istanbul dans la catégorie des poids moyens1.
                    Auparavant, elle avait participé aux Jeux Olympiques de la Jeunesse de Nankin en 20142, avait été vice-championne de France en 2016 et championne de France en 2019, 2020 et 2021 dans la catégorie des moins de 75 kg3.
                    En 2023, elle se qualifie, dans cette même catégorie, pour les Jeux européens de Cracovie, tournoi européen de qualification pour les JO de Paris en 20244. Elle est médaillée d'or au Feliks Stamm (de) en 2023 <br> <span><a href="https://fr.wikipedia.org/wiki/Davina_Michel">autres</a></span></p>
              </div>
          </div>
         
         
      </div>
  </div>
  </main>

  <div class="mousemove"></div>

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