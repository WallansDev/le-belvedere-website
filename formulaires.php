<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Annnonce - Le Belvédère</title>
    <link rel="icon" href="assets/img/logo.ico">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style> form { text-align: center; font-family: Arial, sans-serif;} form h1{ text-align: center;} .button { padding: 5px; height: 50px; width: 100px; } .champ { height: 30px; width: 200px; }</style>
</head>
<body>

<?php
    include('./header.php');

    if(isset($_SESSION['name'])) {
?>

<form id="form-annonce" method="post" action="verification.php" enctype="multipart/form-data">
    <br>
    <h1>📢 - Formulaire Annonce :</h1>
    <br>
    <p>
        <label>Nom annonce :
            <input class="champ" type="text" name="nom_annonce" placeholder=" ex : une soirée mousse">
        </label>
    </p><br>
    <p>
        <label>Image de l'annonce :
            <input type="file" name="image"><br>
        </label>
    </p><br>
    <p>
        <label>Date de l'annonce :
            <input class="champ" type="text" name="date_annonce" placeholder=" ex : Jeudi 15 Novembre 2022">
        </label>
    </p><br>
    <p>
        <label>Auteur de l'annonce :
            <input class="champ" type="text" name="auteur_annonce" placeholder=" ex : Pierre">
        </label>
    </p><br>
    <p>
        <label>
            <input class="button" type="submit" name="submit" value="Modifier">
        </label>
    </p>
</form>
<br><br><br><br>

<form id="form-menu" method="post" action="verification.php">
    <br>
    <h1>🍔 - Formulaire Menu Spécial :</h1>
    <br>
    <p>
        <label>Nom plat :
            <input class="champ" type="text" name="nom_plat" placeholder=" ex : Entrecôte Sauce Poivre">
        </label>
    </p><br>
    <p>
        <label>Prix plat :
            <input class="champ" type="text" name="prix_plat" placeholder=" ex : 23.50">
        </label>
    </p><br>
    <p>
        <label>Nom dessert :
            <input class="champ" type="text" name="nom_dessert" placeholder=" ex : Tiramisu au Spéculoos">
        </label>
    </p><br>
    <p>
        <label>Prix dessert :
            <input class="champ" type="text" name="prix_dessert" placeholder=" ex : 8.00">
        </label>
    </p><br>
    <p>
        <label>
            <input class="button" type="submit" name="submit" value="Modifier">
        </label>
    </p>
</form>

<?php
    }
else {
    echo "<script>location.href='index.php'</script>";
}
?>
</body>
</html>