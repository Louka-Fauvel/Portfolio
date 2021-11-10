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
          <div class="g-recaptcha" data-sitekey="6LekCeEZAAAAAGKY6QsC1ume5HZ3VB8HmFdBsyMX"></div>
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
  <div class="row justify-content-center">
<?php
require_once 'reCaptcha/autoload.php';
if(isset($_POST)) {
  if(isset($_POST['nom']) && !empty($_POST['nom'])) {

    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $commentaire = strip_tags($_POST['commentaire']);

    if(isset($_POST['g-recaptcha-response'])) {

      $recaptcha = new \ReCaptcha\ReCaptcha('6LekCeEZAAAAANjTYWyqTj6rRM9svC6KtcxEDEQQ');
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

      if ($resp->isSuccess()) {
        echo "<div class='alert alert-success text-center col-3'>Captcha Valide.</div>";

        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
        $entete .= "From: " . $email . "\r\n";

        $retour = mail('louka.fauvel@gmail.com', 'Formulaire de contact', $commentaire, $entete);

        if($retour) {
          echo "<div class='alert alert-success text-center col-3'>Votre message a bien été envoyé.</div>";
        }
      } else {

        $errors = $resp->getErrorCodes();
        echo "<div class='alert alert-danger text-center col-3'>Captcha Invalide.</div>";

      }
    } else {
      echo "<div class='alert alert-warning text-center col-3'>Captcha Non rempli.</div>";
    }
  }
}
?>
  </div>
</div>
