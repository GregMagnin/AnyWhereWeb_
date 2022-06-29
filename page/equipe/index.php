<?php

namespace SGL\AWW;
// 2do Solene: Couleur écriture nom + titre idem le fonds... :-(...)
?>

<title>L'Équipe | AWW</title>
<link rel="stylesheet" href="../../assets/css/mentions.css">

<?php include_once '../../partials/header.php'; ?>

<section class="hero">
  <div class="background-image" style="background-image:url(../../assets/image/code_html.jpg);">L'ÉQUIPE</div>
  <div class="margintop"> </div>
  <div class="flex">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="../../assets/image/avatarGregory.jpg" alt="Avatar" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1>Greg</h1>
          <h3>Web developper back end</h3>
          <p>Passionné par le code pur et dur, Greg ne vous décevera pas. </p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="../../assets/image/avatarLionel.png" alt="Avatar" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1>Lionel</h1>
          <h3>Chef de projet</h3>
          <p>Avec un grand sens du Management, Lionel gère les projets de développement.</p>
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="../../assets/image/avatarSolene.png" alt="Avatar" style="width:300px;height:300px;">
        </div>
        <div class="flip-card-back">
          <h1>Solène</h1>
          <h3>Designer</h3>
          <p>Solène a l'art dans la peau, vous pouvez compter sur son style.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include_once '../../partials/footer.php'; ?>
