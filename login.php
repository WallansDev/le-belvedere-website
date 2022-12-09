<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Le Belvédère</title>
    <link rel="icon" href="assets/img/logo.ico">
    <link rel="stylesheet" href="./assets/css/style_login.css">
</head>
<body>
<?php 
    require('./bdd.php');
    include('header.php');
?>
    <form action="adminpage.php" method="post">
        <div class="login-box">
            <h1>Accès sécurisé</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin name"
                         name="name" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
</body>
</html>