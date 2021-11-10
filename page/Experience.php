<?php
getTitre("Red", "Expérience");

$knpLabs_1 = "<b>KNPLabs</b><br>Agence de développement<br>Mai-Juin 2021<br>5 semaines<br>Caen, Normandie";
$knpLabs_2 = "Approfondissement de mes connaissances sur Github, communication au sein d'une équipe avec des pull requests,
utilisation des objets avec PHP et découverte du framework Symfony. Découverte du management d'une agence de développement.
<br><br>Langages informatiques utilisés : HTML, PHP, CSS";

$erasmusSuede_1 = "<b>ERASMUS +</b><br>Institut Lemonnier<br>Octobre 2019<br>1 semaine<br>Falkenberg, Suède";
$erasmusSuede_2 = "Conception et construction d'un véhicule à énergie innovante.
Travail en pluridisciplinarité entre mécanique et mathématiques.
Voyage jusqu’en Suède pour rejoindre les autres élèves en mobilité professionnelle.
Contribution à un « congrès de spécialistes » sur ce sujet pour la première fois.
<br><br>Langue de travail : Anglais";

$erasmusFrance_1 = "<b>ERASMUS +</b><br>Institut Lemonnier<br>Mars 2019<br>1 semaine<br>Caen, Normandie";
$erasmusFrance_2 = "Conception et construction d'un véhicule à énergie innovante.
Travail en pluridisciplinarité entre mécanique et mathématiques.
Accueil des élèves venant d'Espagne et de Suède.
Compte-rendu du projet en réalisant un film.
<br><br>Outils : Adobe Premiere
<br>Langue de travail : Anglais";

$corlet_1 = "<b>Corlet</b><br>Agence de communication<br>Janvier 2017<br>1 semaine<br>Caen, Normandie";
$corlet_2 = "Observation du travail d'un graphiste.
Utilisation des outils du graphiste pour créer des images.
<br><br>Outils : Adobe Photoshop";

tableau(
[["<img src='./image/KNPLabs.jpg' class='img-fluid rounded position-relative' style='width:500px; z-index:1' alt='Logo KNPLabs'>", "$knpLabs_1", "$knpLabs_2"],
["<img src='./image/Erasmus.png' class='img-fluid rounded position-relative' style='width:500px; z-index:1' alt='Logo'>", "$erasmusSuede_1", "$erasmusSuede_2"],
["<img src='./image/Erasmus.png' class='img-fluid rounded position-relative' style='width:500px; z-index:1' alt='Logo'>", "$erasmusFrance_1", "$erasmusFrance_2"],
["<img src='./image/Corlet.png' class='img-fluid rounded position-relative' style='width:500px; z-index:1' alt='Logo'>", "$corlet_1", "$corlet_2"]]);
//Fauvel_Louka_CV.pdf
echo "<div class='text-center mt-5'> <a class='btn btn-outline-dark border border-light text-light btn-lg' href='Document/Fauvel_Louka_CV.pdf' target='_blank'>Télécharger mon CV</a> </div>";
?>
</div>
