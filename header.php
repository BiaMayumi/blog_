<?php
  include_once("helpers/url.php");
  include_once("helpers/index.php");
  include_once("helpers/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROFISSIONAL DE PIJAMA </title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>styles.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="WhatsApp_Image_2023-10-26_at_09.43.57-removebg-preview.png" id="logo">
      <img src="WhatsApp_Image_2023-10-26_at_09.43.57-removebg-preview.png" alt="Blog Codar" class="img">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categorias</a></li>
        <li><a href="sobre.php" class="nav-link">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>

  <style>

    .img{

      width: 40px;
    }

  </style>