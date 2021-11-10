<?php
function getNav() {

  echo "
  <div class='position-sticky top-0' style='z-index:3'>
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

function espaceContact() {
  echo "<div class='position-fixed end-0 shadow bg-dark rounded espaceContact' style='z-index:2'>
          <a class='nav-link btn-outline-light fs-1' href='https://github.com/Louka-Fauvel' target='_blank'><i class='bi bi-github link-secondary'></i></a>
          <a class='nav-link btn-outline-light fs-1' href='https://www.facebook.com/louka.fauvel/' target='_blank'><i class='bi bi-facebook link-primary'></i></a>
          <a class='nav-link btn-outline-light fs-1' href='https://www.linkedin.com/in/louka-fauvel-268411209/' target='_blank'><i class='bi bi-linkedin link-primary'></i></a>
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

function footerModal($nom, $id, $text) {
  echo "
  <button type='button' class='btn btn-outline-danger border border-light text-light' data-bs-toggle='modal' data-bs-target='#$id'>
    $nom
  </button>

  <div class='modal fade' id='$id' tabindex='-1' aria-labelledby='$id/Label' aria-hidden='true'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='$id/Label'>$nom</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body text-start'>

          $text

        </div>
        <div class='modal-footer'>
        </div>
      </div>
    </div>
  </div>";
}
?>
