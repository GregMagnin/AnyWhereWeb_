<?php

namespace SGL\AWW;

include_once '../../partials/header.php';

?>

<section class="hero">
<div class="background-image" style="background-image:url(../../assets/image/accueil.jpg);"></div>
<span><h1>Bienvenue sur AnyWhereWeb !</h1></span>
<span><h3>Votre site web... Partout!</h3></span>
</section>


<section class="lagence">

<h3 class="title">L'agence</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis eveniet hic esse maxime aut repudiandae provident aliquid veritatis doloribus beatae architecto vero voluptatem, molestias eligendi eius reiciendis magni nesciunt laudantium.</p>

<hr>

<ul class="grid">
<li class="small" style="background-image:url(../../assets/image/ordis.png) ;"></li>



</ul>
</section>

<section>

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
          <p class="slide-text">Une agence à la pointe de la technologie.</p>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/carousel_1.jpg" alt="stuff" width="320" height="240">
        </p>
      </li>
      <li class="slide">
        <div class="slide-content">
          <p class="slide-text">Une équipe soudée et compétente.</p>
          <a href="#" class="slide-link">En savoir plus</a>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/bureau.jpeg" alt="stuff" width="320" height="240">
        </p>
      </li>
      <li class="slide">
        <div class="slide-content">
          <p class="slide-text">Des clients satisfaits et qui ont confiance en nous !</p>
          <a href="realisations.html" class="slide-link">En savoir plus</a>
        </div>
        <p class="slide-image">
          <img src="../../assets/image/carousel_3.jpg" alt="stuff" width="320" height="240">
        </p>
      </li>
    </ul>
  </div>

</section>
