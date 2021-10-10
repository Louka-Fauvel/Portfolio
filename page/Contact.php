<?php getTitre("Red", "Contact"); ?>
  <div class="row justify-content-center">
    <div class="col-4">

      <div class="text-center">
        <img src="./image/Logo_gauche.png" class="img-fluid" style="width:300px" alt="Logo">
      </div>

    </div>
    <div class="col-4">

      <form class="was-validated" method="post">
        <div class="mb-3">
          <label class="form-label text-light">Nom</label>
          <input class="form-control is-invalid" type="text" name="nom" placeholder="Votre nom" required>
        </div>
        <div class="mb-3">
          <label class="form-label text-light">Adresse email</label>
          <input class="form-control is-invalid" type="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="mb-3">
          <label class="form-label text-light">Commentaire</label>
          <textarea class="form-control is-invalid" name="commentaire" rows="3" placeholder="Votre commentaire" required></textarea>
        </div>
        <div class="mb-3">
          <input class="btn btn-outline-dark border border-light text-light" type="submit" name="bouton" value="Envoyer">
        </div>
      </form>

    </div>
    <div class="col-4">

      <div class="text-center">
        <img src="./image/Logo_droite.png" class="img-fluid" style="width:300px" alt="Logo">
      </div>

    </div>
  </div>
</div>
<?php
if(isset($_POST)) {
  if(isset($_POST['nom']) && !empty($_POST['nom'])) {
    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $commentaire = strip_tags($_POST['commentaire']);

    $entete = "From: $email";

    $retour = mail('louka.fauvel@gmail.com', 'Formulaire de contact', $commentaire, $entete);
  }
}
?>
