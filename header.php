<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style_header.css">  
</head>
<body>

<?php 
	require('./bdd.php');
	session_start();
?>

<div id="bandeau-main-title">
<br>
<img src="./assets/img/logo.png" width="5%">
<h1 id="main-title">Le Belvedere</h1>
<img src="./assets/img/endline.png" width="50%">
<p id="text-title">Restaurant et Auberge</p>
<br>
<a href="./index.php">Acceuil</a>
    <a> - </a>
<a href="./choix.php">Choix</a>
    <a> - </a>
<a href="./annonce.php">Annonce</a>
    <a> - </a>
<a href="./auberge.php">Auberge</a>
    <a> - </a>
<a href="./contributeurs.php">Contributeurs</a>
    <a> - </a>
<a href="./login.php">Accès Sécurisé</a><br>


<?php
	if(isset($_SESSION['name'])) {
?>
	<a id="administration" href="./adminpage.php">Adminpage</a>
    <a id="logout-button" href="logout.php"><input type="button" value="Logout" name="logout"></a>
<?php
}
?>


<br><br>
</div>
</body>
</html>