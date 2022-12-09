<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce Spéciale - Le Belvédère</title>
    <link rel="stylesheet" href="./assets/css/style_annonce.css">
    <link rel="icon" href="assets/img/logo.ico">
</head>
<?php
require ('./bdd.php');
?>
<body>
    <?php include('./header.php');?>
    <div id="conteneur">

    <?php 
    include("./bdd.php");




?>
    <?php 
    $reponse = $bdd->query('SELECT * FROM annonce');
  
 while ($donnees = $reponse->fetch())
 {
 ?>
    <div id="annonce">
        <h1 id="title">Le Belvédère <br>vous invite pour <?php echo $donnees['nom_annonce']; ?> :</h1><br><br>


<?php
//  Préparation connexion sql pour charger l'image de l'annonce 
$dbtype  = "mysql";
$dbhost  = "localhost";
$dbname  = "belvedere_bdd";
$dbuser  = "root";
$dbpass  = "";

//  Connexion à la base de données
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// Query
$sql = "SELECT id_img, bin_img FROM images WHERE id_img  = 1";
$q = $conn->prepare($sql);
$q->execute();
$q->bindColumn(1, $id);
$q->bindColumn(2, $cover, PDO::PARAM_LOB);
while($q->fetch())
{
 file_put_contents($id.".jpg",$cover);
 echo "<img src='".$id.".jpg' width='50%'> <br/>";
}
?>   
        <br><br>
        <p type="date" id="date"><?php echo $donnees['date_annonce']; ?></p>
        <br>
        <p id="auteur">Posté par <?php echo $donnees['auteur_annonce']; ?></p>
        <br><br>
        <p><a href="https://www.google.com/maps/place/17+Bd+de+la+Pierre+Lys,+11500+Belvianes-et-Cavirac/@42.8520092,2.1989043,17z/data=!3m1!4b1!4m5!3m4!1s0x12afc1dcd11b1e7b:0x9c78877321383891!8m2!3d42.8520092!4d2.201093?hl=fr">Le Belvédère Restaurant et Auberge, 17 Bd de la Pierre Lys, 11500 Belvianes-et-Cavirac</a> | Tél : <a href="tel:+330468202031">0468202031</a> | E-mail : <a href="mailto:Lebelvedere.belvianes@gmail.com">Lebelvedere.belvianes@gmail.com</a><br>Siret N°91211583900017</p>
        <br><br>    
    </div>
        <?php
}
?>
    </div>
</body>
</html>