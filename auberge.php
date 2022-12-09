<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="author" content="Wallans">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auberge - Le Belvédère</title>
    <link rel="stylesheet" href="./assets/css/style_auberge.css">
    <link rel="icon" href="assets/img/logo.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
<body>
    <?php include('header.php'); ?>

<!-- Chambre 1 -->
<div id="conteneur">
<div id="card-1">
  <div class="card__picture-box">
    <img class="card__picture" src="./assets/img/auberge/chambre1/1.jpg" alt="" />
  </div>
  <div class="card__body">
    <h1 class="card__heading">Chambre 1</h1>
    <p class="card_description">Au prix de <span>25€ /nuit</span>
      <br><br>- 34 m²
      <br>- Lit double
      <br>- Salle de bain
    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Détails</button>
  </div>
</div>

<!-- Chambre 2 -->
<div id="card-2">
  <div class="card__picture-box">
    <img class="card__picture" src="./assets/img/auberge/chambre2/1.jpg" alt="" />
  </div>
  <div class="card__body">
    <h1 class="card__heading">Chambre 2</h1>
    <p class="card_description">Au prix de <span>25€ /nuit</span>
      <br><br>- 34 m²
      <br>- Lit double
      <br>- Salle de bain
    </p>
    <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Détails</button>
  </div>
</div>

<!-- Chambre 3 -->
<div id="card-3">
  <div class="card__picture-box">
    <img class="card__picture" src="./assets/img/auberge/chambre3/1.jpg" alt="" />
  </div>
  <div class="card__body">
    <h1 class="card__heading">Chambre 3</h1>
    <p class="card_description">Au prix de <span>25€ /nuit</span>
      <br><br>- 34 m²
      <br>- Lit double
      <br>- Salle de bain
    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Détails</button>
  </div>
</div>
</div>

<!-- Modal Chambre 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Chambre 1 :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cette chambre comporte ...</p>
        <img class="modal-img" src="./assets/img/auberge/chambre1/1.jpg">
        <br><br>
        <img class="modal-img" src="./assets/img/auberge/chambre1/2.jpg">
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Chambre 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Chambre 2 :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cette chambre comporte ...</p>
        <img class="modal-img" src="./assets/img/auberge/chambre2/1.jpg">
        <br><br>
        <img class="modal-img" src="./assets/img/auberge/chambre2/2.jpg">
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Chambre 3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Chambre 3 :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cette chambre comporte ...</p>
        <img class="modal-img" src="./assets/img/auberge/chambre3/1.jpg">
        <br><br>
        <img class="modal-img" src="./assets/img/auberge/chambre3/2.jpg">
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>