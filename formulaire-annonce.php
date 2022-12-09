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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>* { margin: 1px; padding: 1px;} form { text-align: center;}</style>
</head>
<body>

<?php

session_start();

if(isset($_SESSION['name'])) {

?>

<form id="monform" method="post" action="verification.php">
    <br>
    <h1>Modifier une annonce :</h1>
    <br>
    <p>
        <label>Nom annonce :
            <input type="text" name="nom_annonce" placeholder=" ex : une soirée mousse">
        </label>
    </p>
    <p>
        <label>Source Image (https://...) :
            <input type="text" name="source_img" placeholder=" ex : https://mon-image.jpg">
        </label>
    </p>
    <p>
        <label>Date de l'annonce :
            <input type="text" name="date_annonce" placeholder=" ex : Vendredi 20 Mai 2022">
        </label>
    </p>
    <p>
        <label>Auteur de l'annonce :
            <input type="text" name="auteur_annonce" placeholder=" ex : Pierre">
        </label>
    </p>
    <p>
        <label>
            <input type="submit" name="button" value="Envoyer">
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