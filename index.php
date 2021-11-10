<?php include "function/function.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='function/css.css?'><?php //supprimer ? après les test ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/png" href="./image/favicon.png"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <title>Portfolio</title>
  </head>
  <body>
    <?php
    espacePage("accueil", 0, "Gris");
    espaceContact();
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

    $mentionsLegales = "Mentions légales";
    $idMentionsLegales = "mentionsLegales";
    $textmentionsLegales = "<b>Réalisation :</b> Louka Fauvel<br>
                            En octobre 2021
                            <br><br>
                            <b>Hébergeur :</b> Heroku
                            <br><br>
                            <b>Crédit photo :</b> Fabienne Guérif
                            ";

    $RGPD = "RGPD";
    $idRGPD = "RGPD";
    $textRGPD = "
    <b>Article 1 :</b> Vos données à caractère personnel sont protégées
    <br><br>
    La CNIL veille à la protection de vos données à caractère personnel.<br>
    Article 2-78-17 (6 janvier 1978)
    <br><br>
    <b>Article 2 :</b> Comment sont utilisés vos données ?
    <br><br>
    Louka Fauvel peut connaître votre nom et prénom et votre adresse mail grâce au formulaire de contact.
    <br><br>
    <b>Article 3 :</b> Finalité du traitement de vos données
    <br><br>
    Louka Fauvel se sert de vos données pour répondre uniquement à vos messages.
    <br><br>
    <b>Article 4 :</b> A qui sont transmis vos données personnelles ?
    <br><br>
    Louka Fauvel ne transmet aucune de vos données à caractère personnel.
    <br><br>
    <b>Article 5 :</b> Vos droits
    <br><br>
    Conformément au Règlement (UE) 2016/679 relatif à la protection des données à caractère personnel,
    vous disposez des droits suivants sur vos données : droit d’accès, droit de rectification, droit à
    l’effacement (droit à l’oubli), droit d’opposition, droit à la limitation du traitement, droit à la portabilité.
    Vous pouvez également définir des directives relatives à la conservation, à l'effacement et à la
    communication de vos données à caractère personnel après votre décès.
    <br><br>
    Vous pouvez, pour des motifs tenant à votre situation particulière, vous opposer au traitement des
    données vous concernant.";
    ?>
    <div class=" pb-5 backgroundGris">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-2 text-start">
            <?php footerModal($mentionsLegales, $idMentionsLegales, $textmentionsLegales); ?>
          </div>

          <div class="col-2 text-end">
            <?php footerModal($RGPD, $idRGPD, $textRGPD); ?>
          </div>

        </div>
      </div>
    </div>
    <script src="function/scripts.js?" type="text/javascript"></script>
  </body>
</html>
