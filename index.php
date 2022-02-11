<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/slider.css">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <title>Page d'accueil CV Mathias Cabrol</title>
</head>

<body>
  <?php include 'nav.php' ?>
  <main>
    <div class="slider">
      <div class="slider--content">
        <button class="slider__btn-left">
          <i class="fas fa-angle-left"></i>
        </button>
        <div class="slider--feature">
          <h1 class="slider--title"></h1>
          <p class="slider--text"></p>
          <a class="slider--link"><button class="slider--btn" type="button">Découvrir</button></a>
        </div>
        <button class="slider__btn-right">
          <i class="fas fa-angle-right"></i>
        </button>
      </div>
    </div>
  </main>
  <footer>
    <a target="blank" href="https://github.com/MathiasCabrol"><i class="fab fa-github-square fa-3x icon"></i></a>
    <a target="blank" href="https://fr.linkedin.com/in/mathias-cabrol-2911b4198"><i class="fab fa-linkedin fa-3x icon"></i></a>
  </footer>
</body>
<script src="assets/js/slider.js"></script>

</html>