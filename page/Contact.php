<?php getTitre("Red", "Contact"); ?>
  <div class="row justify-content-center">
    <div class="col-4">

      <div class="text-center">
        <img src="./image/Logo_gauche.png" class="img-fluid" style="width:300px" alt="Logo">
      </div>
      
    </div>
    <div class="col-4">

      <form class="" method="post">
        <div class="mb-3">
          <label class="form-label text-light">Nom</label>
          <input class="form-control" type="text" name="nom" placeholder="Votre nom">
        </div>
        <div class="mb-3">
          <label class="form-label text-light">Adresse email</label>
          <input class="form-control" type="email" name="email" placeholder="Votre email">
        </div>
        <div class="mb-3">
          <label class="form-label text-light">Commentaire</label>
          <textarea class="form-control" name="commentaire" rows="3" placeholder="Votre commentaire"></textarea>
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
