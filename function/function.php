<?php
function getNav() {

  echo "
  <nav class='bg-dark'>
    <div class='container'>
      <ul class='nav'>
        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>Accueil</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>À propos</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>Compétence</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>Experience</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>Formation</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link link-danger' href='index.php'>Contact</a>
        </li>
      </ul>
    </div>
  </nav>";
}

function getTitre($titre) {

  echo "<div class='container'> <h1 class='text-center'>$titre</h1>";
}

function tableauCompetence($progressBar, $thead, $tbody) {

  echo "<table class='table table-dark table-hover'> <thead> <tr>";

  foreach ($thead as $i => $j) {

    echo "<th scope='col' class='text-center'>$j</th>";
  }

  echo "</tr> </thead> <tbody> <tr>";

  foreach ($progressBar as $a => $z) {
    echo "<td class='text-center'>
      <div class='progress'>
        <div class='progress-bar' role='progressbar' style='width: $z%' aria-valuenow='$z' aria-valuemin='0' aria-valuemax='100'></div>
      </div></td>";
  }

  echo "</tr>";

  foreach ($tbody as $e => $r) {
    echo "<tr>";

    foreach ($r as $t => $y) {

      if ($y == "&nbsp;") {

        echo "<td class='text-center'>$y</td>";

      } else {

        echo "<td class='align-top'><li>$y</li></td>";
      }
    }

    echo "</tr>";
  }

  echo "</tbody> </table>";
}

function tableau($tbody) {

  echo "<table class='table table-dark table-hover'> <tbody>";

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
