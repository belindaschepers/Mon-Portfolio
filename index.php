<?php
 $image_avatar = ("Images/me-avatar.png");
 $image_html = ("Images/html.png");
 $image_css = ("Images/css.png");
 $image_linkedin = ("Images/linkedin.png");
 $image_github = ("Images/github.png");
 $image_javascript = ("Images/javascript.png");
 $image_git = ("Images/git.png");
 $image_sass = ("Images/sass.png");
 $image_php = ("Images/php.png");
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
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand text-primary" href="#a-propos">Belinda Schepers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#a-propos">Qui suis-je?<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#competences">Compétences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mes traveaux</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Me contacter</a>
      </li>
    </ul>
  </div>
  <div class="nav-item social">
    <a href="https://www.linkedin.com/in/belinda-schepers/" target="_blank"><img class="linkedin" src="<?php echo $image_linkedin;?>" alt="linkedin"></a>
    <a href="https://github.com/belindaschepers" target="_blank"><img class="github" src="<?php echo $image_github;?>" alt="github"></a>
</div>
</nav>

 </header>
 <div class="container">
   <section class="row">
     <div class="col-lg-12 offset-lg-5 who" id="a-propos">
     <p>Qui suis-je?</p>
</div>
</section>
   <section class="row">
     <div class="col-lg-6">
       <div class="descript">
         <p>Petite nana passionnée d'informatique, de jeux vidéo, de musique et de code,
           je me suis lancée dans une aventure appelée BeCode. C'est une formation de développeur web de 6mois durant laquelle
           j'ai appris les différents languages front-end et back-end (ma préférence allant vers le front-end),
           où j'ai eu l'occasion d'effectuer des traveaux en équipe, ainsi que de participer à un projet client
           pour la conception d'une imprimante 3D.
         </p>
         <p>Je suis très curieuse des nouvelles technologies et ai une constante envie d'apprendre.</p>
  </div>
  </div>
     <div class ="col-lg-6">
         <img class="avatar" src="<?php echo $image_avatar;?>" alt="avatar">
  </div>
  </section>
  <div id="test"></div>
   <section class="row">
     <div class="col-lg-12 offset-lg-5 who skills" id="competences">
     <p>Mes compétences</p>
   </div>
  </section>
  <section class="row">
    <div class="col-lg-12 hardskills">
      <img class="html" src="<?php echo $image_html;?>" alt="html">
      <img class="css" src="<?php echo $image_css;?>" alt="css">
      <img class="js" src="<?php echo $image_javascript?>" alt="javascript">
      <img class="git" src="<?php echo $image_git?>" alt="git">
      <img class="sass" src="<?php echo $image_sass?>" alt="sass">
      <img class="php" src="<?php echo $image_php?>" alt="php">
  </div>
  </section>
  <section class="row">
    <div class="col-lg-12 offset-lg-5 who" id="contact">
     <p>Me contacter</p>
    </div>
  </section>
  <section class="row">
    <div class="col-lg-3 offset-lg-5 contact">
<?php include('form.php');?>
   </div>
</section>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark"><span class="copy">© 2020 Copyright:</span>
    <a href="https://www.linkedin.com/in/belinda-schepers/"> Belinda Schepers</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>