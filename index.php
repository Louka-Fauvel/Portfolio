<?php include "function/function.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='function/css.css'><?php //supprimer ? après les test ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Portfolio</title>
  </head>
  <body>
    <?php
    espacePage("accueil", 0, "Gris");
    getNav();
    include_once "page/Accueil.php";
    backgroundDiagonal(1);

    espacePage("a_propos", 5, "Red");
    include_once "page/A_propos.php";
    backgroundDiagonal(2);

    espacePage("competence", 5, "Gris");
    include_once "page/Competence.php";
    backgroundDiagonal(1);

    espacePage("experience", 5, "Red");
    include_once "page/Experience.php";
    backgroundDiagonal(2);

    espacePage("formation", 5, "Gris");
    include_once "page/Formation.php";
    backgroundDiagonal(1);

    espacePage("contact", 5, "Red");
    include_once "page/Contact.php";
    backgroundDiagonal(2);
    ?>
    <script src="function/scripts.js?" type="text/javascript"></script>
  </body>
</html>
