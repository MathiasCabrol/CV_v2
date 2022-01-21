<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/titleAnimation.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/projects.css">
    <title>Document</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <div id="titleContainer">
        <h1 id="mainTitle">Portfolio</h1>
        <div class="scrollButton">
            <a href="#mainContainer" class="scrollIcon">></a>
    </div>
    </div>
    <div id="mainContainer" class="container-fluid pt-5">
        <div class="row justify-content-around">
        <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet1.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Mise en place de site e-commerce wordpress. Optimisation SEO, politiques de confidentialité, rédaction d'artciles et de contenu.</p>
                    <i class="fab fa-wordpress fa-3x"></i>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet2.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Support web vitrine pour une pizzeria fictive, initiation aux principes de bases en html, css et bootstrap. Projet de groupe et application méthodes agiles.</p>
                    <i class="fab fa-html5 fa-3x"></i>
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <i class="fab fa-bootstrap fa-3x"></i>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet3.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Projet de création de boutique en ligne pour animalerie, en SPA, avec système de panier entièrement en javascript, utilisation de fichiers Json.</p>
                    <i class="fab fa-html5 fa-3x"></i>
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <i class="fab fa-bootstrap fa-3x"></i>
                    <i class="fab fa-js-square fa-3x"></i>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet4.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Initiation à la POO, utilisation de classes et méthodes magiques. Mise à jour des statistiques en temps réel et génération de personnages aléatoire. </p>
                    <i class="fab fa-html5 fa-3x"></i>
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <i class="fab fa-bootstrap fa-3x"></i>
                    <i class="fab fa-js-square fa-3x"></i>
                    <i class="fab fa-php fa-3x"></i>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet5.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Création d'un thème wordpress personalisé. Utilisation des différents hooks spécifiques wordpress. Adaptation aux différents contenus édités. </p>
                    <i class="fab fa-html5 fa-3x"></i>
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <i class="fab fa-bootstrap fa-3x"></i>
                    <i class="fab fa-php fa-3x"></i>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet6.png" class="projectImage">
                    <button class="projectButton my-4" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                    <button class="projectButton my-4" type="button"><i class="fas fa-wifi mr-2"></i>Version Live</button>
                    <p class="projectText text-white">Projet API en react permettant d'afficher les différents pays, de les trier par continent et d'afficher les données respectives.</p>
                    <i class="fab fa-html5 fa-3x"></i>
                    <i class="fab fa-css3-alt fa-3x"></i>
                    <i class="fab fa-bootstrap fa-3x"></i>
                    <i class="fab fa-js-square fa-3x"></i>
                    <i class="fab fa-react fa-3x"></i>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/opacity.js"></script>

</html>