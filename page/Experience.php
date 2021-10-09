<?php
getTitre("Red", "Expérience");

$knpLabs_1 = "<b>KNPLabs</b><br>Agence de développement<br>Mai-Juin 2021<br>5 semaines<br>Caen, Normandie";
$knpLabs_2 = "Approfondir mes connaissances sur Github, communiquer au sein d'une équipe avec des pull requests,
savoir utiliser les objets avec PHP et découvrir le framework Symfony. Découvrir le management d'une agence de développement.
<br><br>Langages informatiques utilisés : HTML, PHP, CSS";

$erasmusSuede_1 = "<b>ERASMUS +</b><br>Institut Lemonnier<br>Octobre 2019<br>1 semaine<br>Falkenberg, Suède";
$erasmusSuede_2 = "Concevoir et construire ensemble un véritable véhicule à énergie innovante.
Travailler en pluridisciplinarité entre mécanique et mathématiques.
Voyager jusqu’en Suède pour rejoindre les autres élèves en mobilité professionnelle.
Contribuer à un « congrès de spécialistes » sur ce sujet pour la première fois.
<br><br>Langue de travail : Anglais";

$erasmusFrance_1 = "<b>ERASMUS +</b><br>Institut Lemonnier<br>Mars 2019<br>1 semaine<br>Caen, Normandie";
$erasmusFrance_2 = "Concevoir et construire ensemble un véritable véhicule à énergie innovante.
Travailler en pluridisciplinarité entre mécanique et mathématiques.
Accueillir des élèves venant d'Espagne et de Suède.
Rendre compte du projet en réalisant un film.
<br><br>Outils : Adobe Premiere
<br>Langue de travail : Anglais";

$corlet_1 = "<b>Corlet</b><br>Agence de communication<br>Janvier 2017<br>1 semaine<br>Caen, Normandie";
$corlet_2 = "Observer le travail d'un graphiste.
Utiliser les outils du graphiste pour créer des images.
<br><br>Outils : Adobe Photoshop";

tableau(
[["<img src='./image/KNP.png' class='img-fluid position-relative' style='width:200px; z-index:1' alt='Logo KNPLabs'>", "$knpLabs_1", "$knpLabs_2"],
["<img src='./image/Erasmus.png' class='img-fluid position-relative' style='width:200px; z-index:1' alt='Logo'>", "$erasmusSuede_1", "$erasmusSuede_2"],
["<img src='./image/Erasmus.png' class='img-fluid position-relative' style='width:200px; z-index:1' alt='Logo'>", "$erasmusFrance_1", "$erasmusFrance_2"],
["<img src='./image/Corlet.png' class='img-fluid position-relative' style='width:200px; z-index:1' alt='Logo'>", "$corlet_1", "$corlet_2"]]);
?>
</div>
