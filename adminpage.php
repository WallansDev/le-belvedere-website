<head>
    <title>Administration - Le Belvédère</title>
    <link rel="icon" href="assets/img/logo.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/style_login.css">
</head>

<?php

    require('./bdd.php');
    include('./header.php');

$reponse = $bdd->query('SELECT * FROM utilisateur');
  
while ($donnees = $reponse->fetch())
{

    $name = $donnees['nom_utilisateur'];
    $pwd = $donnees['mdp_utilisateur'];;

}





if(isset($_SESSION['name'])) {

?>

<div id="adminpage">
    <br>
    <h1 id="adminpage-title">Vous êtes connecté en Administrateur</h1>
    <br>
    <a class="adminpage-text" href="./formulaires.php">📝 - Formulaires</a><br><br>
</div>
<?php
}
else {
    if($_POST['name']==$name && $_POST['password']==$pwd) {
        $_SESSION['name']=$name;

        echo "<script>location.href='./adminpage.php'</script>";
    }
    else {

        echo "<script>alert('Nom d\'utilisateur ou mot de passe incorrect')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>