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
            <div class="col-5 projectContainer p-2 text-center">
                <div class="projectCaption">
                    <img src="../assets/img/Projet1.png" class="projectImage">
                    <button class="projectButton hidden" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                </div>
            </div>
            <div class="col-5 projectContainer p-2">
                <div class="projectCaption">
                    <img src="../assets/img/Projet2.png" class="projectImage">
                    <button class="projectButton hidden" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2">
                <div class="projectCaption">
                    <img src="../assets/img/Projet3.png" class="projectImage">
                    <button class="projectButton hidden" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                </div>
            </div>
            <div class="col-5 projectContainer mt-5 p-2">
                <div class="projectCaption">
                    <img src="../assets/img/Projet3.png" class="projectImage">
                    <button class="projectButton hidden" type="button"><i class="fab fa-github mr-2"></i>Code source</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/opacity.js"></script>

</html>