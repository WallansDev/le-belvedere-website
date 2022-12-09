<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Spécial - Le Belvédère</title>
    <link rel="stylesheet" href="./assets/css/style_carte.css">
    <link rel="icon" href="assets/img/logo.ico">
</head>
<body>
    <?php 
    include('./header.php');
    include('./bdd.php');

 $reponse = $bdd->query('SELECT * FROM menu_special WHERE id_menu = 1');
  
 while ($donnees = $reponse->fetch())
 {
 ?>
    <div id="carte-1-title"><br>
        <p id="title-text">Special Aujourd'hui</p>
    </div>
    <br>
    <!-- Colonne 1 -->
    <div id="carte-1-menu-cl1">
        <p class="menu-text"><?php echo $donnees['nom_plat']; ?><br><span class="prix2"><?php echo $donnees['prix_plat']; ?>eur</span></p>
        <br>
        <p class="menu-text"><?php echo $donnees['nom_dessert']; ?><br><span class="prix2"><?php echo $donnees['prix_dessert']; ?>eur</span></p>
    </div>
<?php
}
?>
    <footer>
    <p>Le Belvédère met un point d'honneur à travailler des produits frais et locaux <br>autant que possible afin de favoriser les producteurs de proximité.<br><br><a href="https://www.google.com/maps/place/17+Bd+de+la+Pierre+Lys,+11500+Belvianes-et-Cavirac/@42.8520092,2.1989043,17z/data=!3m1!4b1!4m5!3m4!1s0x12afc1dcd11b1e7b:0x9c78877321383891!8m2!3d42.8520092!4d2.201093?hl=fr">Le Belvédère Restaurant et Auberge, 17 Bd de la Pierre Lys, 11500 Belvianes-et-Cavirac</a> | Tél : <a href="tel:+330468202031">0468202031</a> | E-mail : <a href="mailto:Lebelvedere.belvianes@gmail.com">Lebelvedere.belvianes@gmail.com</a><br>Siret N°91211583900017</p>
    </footer>

    <br><br><br><br>
</body>
</html>