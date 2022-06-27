<?php

namespace GC7\featreContactForm;

// Header

session_start();

$page = htmlspecialchars($_GET['page'] ?? 'accueil/accueil.php');
// echo 'Page = ' . $page . '<hr>';
// echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Un formulaire de contact en PHP/MySQL">
  <title>Formulaire de Contact</title>
  <script id="__bs_script__" src='aGC7/config/browser-sync/sync_gc7.js'></script>

  <link rel="shortcut icon" href="./assets/icons/animated_favicon.gif">
  <!-- <link rel="shortcut icon" href="./assets/icons/favicon.ico"> -->
  <link href="aGC7/src/css/bootstrap520beta.min.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
