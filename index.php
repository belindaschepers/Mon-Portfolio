<?php
 $image_avatar = ("Images/me-avatar.png");
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Portfolio Belinda Schepers</title>
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!-- Main css -->
  <link rel="stylesheet" href="http://127.0.0.1/wordpress/wp-content/themes/composition/assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="script.js"></script>
</head>

<body>
 <header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-primary" href="#">Belinda Schepers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Qui suis-je?<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mon Parcours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mes traveaux</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Me contacter</a>
      </li>
    </ul>
  </div>
</nav>
 </header>
 <div class="container">
   <section class="row">
     <div class="col-lg-6">
       <div class="descript">
         <p class="who">Qui suis-je?</p>
         <p>Petite nana passionnée d'informatique, de jeux vidéo, de musique et de code,
           je me suis lancée dans une aventure appelée BeCode. C'est une formation de 6mois durant laquelle
           j'ai appris les différents languages front-end et back-end (ma préférence allant vers le front-end),
           où j'ai eu l'occasion d'effectuer des traveaux en équipe, ainsi que de participer à un projet client
           pour la conception d'une imprimante 3D.
         </p>
  </div>
  </div>
     <div class ="col-lg-6">
 <img class="avatar" src="<?php echo $image_avatar;?>" >
</div>
</section>
</div>
</body>
</html>