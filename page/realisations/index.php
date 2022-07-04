<?php

namespace SGL\AWW;

?>
<title>Réalisations | AWW</title>
<link rel="stylesheet" href="../../assets/css/realisations.css">

<?php include_once '../../partials/header.php'; ?>

<section class="hero">
  <span>
    <h1 class="top110">Nos réalisations:</h1>
  </span>
  <div class="background-image" style="background-image:url(../../assets/image/technologie.jpg);"></div>
</section>

<section class="top80">
  <a class="imgLink" href="https://www.lecordinabytom.com/" target="_blank">
    <img alt="resto" src="../../assets/image/imgRestaurant.jpg">
  </a>
  <p>Développement d'un site internet pour un restaurant avec possibilité de réserver, commander et payer en ligne. </p>

  <a class="imgLink" href="https://www.ups.com/fr/fr/business-solutions/business-shipping-tools.page" target="_blank">
    <img alt="ups" src="../../assets/image/ups-logo.png">  </a>
    <p>Création d'une application pour gérer les livraisons. </p>
    <a class="imgLink" href="https://centre-valdeloire.chambres-agriculture.fr/agroenvironnement/eau/gestion-quantitative/cher/net-irrig-le-bilan-hydrique-en-ligne/" target="_blank">
    <img alt="ups" src="../../assets/image/NEt-Irrig.png">  </a>
    <p>Réalisation d'un site internet pour promouvoir Net-Irrig, un outil dédié au pilotage de l'irrigation. </p>

</section>


<div class="confiance">

  Ils nous font confiance :

</div>


<section class="top80">

  <div class="slider">
    <input type="radio" name="toggle" id="btn-1" checked>
    <input type="radio" name="toggle" id="btn-2">
    <input type="radio" name="toggle" id="btn-3">

    <div class="slider-controls">
      <label for="btn-1"></label>
      <label for="btn-2"></label>
      <label for="btn-3"></label>
    </div>

    <ul class="slides">
      <li class="slide">
        <div class="slide-content">
          <p class="slide-text">Anne-Sophie : <span class="italique">'On a vécu une expérience enrichissante en développant avec AnyWhereWeb un site internet pour les agriculteurs.'</span> </p>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/sopasy.png" alt="stuff" width="320">
        </p>
      </li>
      <li class="slide">
        <div class="slide-content">
          <p class="slide-text">Michel : <span class="italique">'AnyWhereWeb a construit notre site internet tel que nous le souhaitons, je recommande !' </span></p>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/IKITLogo.jpg" alt="stuff" width="230">
        </p>
      </li>
      <li class="slide">
        <div class="slide-content">
          <p class="slide-text">Arnaud : <span class="italique">'Grâce à AnyWhereWeb, nous avons un magnifique site web, très fonctionnel.' </span></p>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/AHSLogo.jpg" alt="stuff" width="300">
        </p>
      </li>
    </ul>
  </div>

</section>
<?php include_once '../../partials/footer.php'; ?>
