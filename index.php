<?php include "function/function.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Portfolio</title>
  </head>
  <body>
    <?php
    espacePage("accueil", 0);
    getNav();
    include_once "page/Accueil.php";
    espacePage("a_propos", 5);
    include_once "page/A_propos.php";
    espacePage("competence", 5);
    include_once "page/Competence.php";
    espacePage("experience", 5);
    include_once "page/Experience.php";
    espacePage("formation", 5);
    include_once "page/Formation.php";
    ?>

  </body>
</html>
