<body>
<?php
require ('./bdd.php');

if(!empty($_POST['submit']) && $_POST['submit'] == 'Modifier')  {

  $sup=$bdd->prepare('DELETE FROM `images`;');
  $sup->execute();
  $req=$bdd->prepare("INSERT INTO images (id_img, nom_img, taille_img, type_img, bin_img) VALUES (1, ?, ?, ?, ?)");
  $req->execute(array($_FILES["image"]["name"], $_FILES["image"]["size"], $_FILES["image"]["type"], file_get_contents($_FILES["image"]["tmp_name"])));

  $nomAnnonce = $_POST['nom_annonce'];
  $date = $_POST['date_annonce'];
  $auteur = $_POST['auteur_annonce'];


  $sql2 = "UPDATE `annonce` SET `nom_annonce`= '$nomAnnonce',`date_annonce`='$date',`auteur_annonce`='$auteur'";

  if ($bdd->query($sql2) === TRUE) {
    } 
  
  echo ('Votre annonce à bien était modifiée.<br>Vous allez être rediriger dans 5 secondes.');
}


if(!empty($_POST['submit']) && $_POST['submit'] == 'Envoyer')  {
  $nomPlat = $_POST['nom_plat'];
  $prixPlat = $_POST['prix_plat'];
  $nomDessert = $_POST['nom_dessert'];
  $prixDessert = $_POST['prix_dessert'];

  $sql = "UPDATE `menu_special` SET `nom_plat`= '$nomPlat',`prix_plat`='$prixPlat',`nom_dessert`='$nomDessert',`prix_dessert`='$prixDessert'";

  if ($bdd->query($sql) === TRUE) {
    } 
  
  echo ('Votre annonce à bien était modifiée.<br>Vous allez être rediriger dans 5 secondes.');
}
?>

<script type="text/javascript">
  window.onload = function () {
  setInterval('Redirect()', 5000);
  };
  function Redirect() {  
    window.location="./index.php"; 
  } 
</script>
</body>