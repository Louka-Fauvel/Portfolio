<?php
function getNav() {

  echo "
  <div class='position-sticky top-0' style='z-index:2'>
  <nav class='bg-dark shadow-lg'>
    <div class='container'>
      <ul class='nav'>
        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#accueil'>Accueil</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#a_propos'>À propos</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#competence'>Compétence</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#experience'>Expérience</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#formation'>Formation</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link btn-outline-danger text-light' href='#contact'>Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  </div>";
}

function espacePage($position, $size, $couleur) {

  echo "<div id='$position'></div>";
  echo "<div class='pb-$size background$couleur'></div>";
}

function backgroundDiagonal($choix) {
  echo "<div class='diagonalImg$choix'></div>";

}

function getTitre($couleur, $titre) {

  echo "<div class='background$couleur'> <div class='container'> <h1 class='text-center text-light'>$titre</h1>
        <div class='mb-5'></div>";
}

function tableauCompetence($progressBar, $thead, $tbody) {

  echo "<table class='table table-borderless'> <thead> <tr>";

  foreach ($thead as $i => $j) {

    echo "<th scope='col' class='text-center text-light'>$j</th>";
  }

  echo "</tr> </thead> <tbody> <tr>";

  foreach ($progressBar as $a => $z) {
    echo "<td class='text-center'>
      <div class='progress'>
        <div class='progress-bar progress-bar-striped bg-danger progress-bar-animated' role='progressbar' style='width: $z%' aria-valuenow='$z' aria-valuemin='0' aria-valuemax='100'>$z%</div>
      </div></td>";
  }

  echo "</tr>";

  foreach ($tbody as $e => $r) {
    echo "<tr>";

    foreach ($r as $t => $y) {

      if ($y == "") {

        echo "<td class='text-center text-light'>$y</td>";

      } else {

        echo "<td class='align-top text-light'><li>$y</li></td>";
      }
    }

    echo "</tr>";
  }

  echo "</tbody> </table>";
}

function tableau($tbody) {

  echo "<table class='table text-light'> <tbody>";

  foreach ($tbody as $e => $r) {
    echo "<tr>";

    foreach ($r as $t => $y) {
      echo "<td class='align-top'>$y</td>";

    }

    echo "</tr>";
  }

  echo "</tbody> </table>";
}

?>
