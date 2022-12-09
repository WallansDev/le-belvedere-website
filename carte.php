<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte - Le Belvédère</title>
    <link rel="stylesheet" href="./assets/css/style_carte.css">
    <link rel="icon" href="assets/img/logo.ico">
</head>
<body>
    <?php include('./header.php'); ?>

    <div id="carte-1-title">
        <h1 class="title">Carte</h1>
        <!--<p id="title-text">Restaurant et Auberge <br> Belvianes-et-Cavirac</p>-->
    </div>
    <br>
    <!-- Colonne 1 -->
    <div id="carte-1-menu-cl1">
        <h2 class="food-title">Entrée</h2><br>
        <p class="food-text"><a id="e1" onclick="getId(this.id)" href="#box">Salade César au Poulet<span class="prix">7.50eur&ensp;12.50eur</span></a></p><br>
        <p class="food-text"><a id="e2" onclick="getId(this.id)" href="#box">Salade de Chèvre Chaud<span class="prix">6.50eur&ensp;11.50eur</span></a></p><br>
        <p class="food-text"><a id="e3" onclick="getId(this.id)" href="#box">Melon et Jambon de Parme<span class="prix">6.50eur&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span></a></p><br>
        <br>

        <h2 class="food-title">Plat</h2><br>
        <p class="food-text"><a id="p1" onclick="getId(this.id)" href="#box">Burger Maison avec Frites et Salade<span class="prix">14.50eur</span></a></p><br>
        <p class="food-text"><a id="p2" onclick="getId(this.id)" href="#box">Daube de Boeuf aux Légumes Anciens<span class="prix">15.50eur</span></a></p><br>
        <p class="food-text"><a id="p3" onclick="getId(this.id)" href="#box">Cuisse de Poulet Marinée Citron et Miel avec Frites<span class="prix">13.50eur</span></a></p><br>
        <p class="food-text"><a id="p4" onclick="getId(this.id)" href="#box">Lasagne avec Salade<span class="prix">14.50eur</span></a></p><br>
        <p class="food-text"><a id="p5" onclick="getId(this.id)" href="#box">Boudin Noir Purée à la Vanille, Sauce aux Pommes<span class="prix">13.50eur</span></a></p><br>
        <br>

        <h2 class="food-title">Dessert</h2><br>
        <p class="food-text"><a id="d1" onclick="getId(this.id)" href="#box">Panna Cotta lait de Coco et Citron Vert<span class="prix">6.90eur</span></a></p><br>
        <p class="food-text"><a id="d2" onclick="getId(this.id)" href="#box">Mousse au Chocolat Noir<span class="prix">6.90eur</span></a></p><br>
        <p class="food-text"><a id="d3" onclick="getId(this.id)" href="#box">Tarte Crumble (Selon Saison, et Fruits à disposition)<span class="prix">6.90eur</span></a></p><br>
        <p class="food-text"><a id="d4" onclick="getId(this.id)" href="#box">2 Boules de Glace<span class="prix">4.50eur</span></a></p><br>
        <p class="food-text"><a id="d5" onclick="getId(this.id)" href="#box">Assiette de Fromage<span class="prix">9.50eur</span></a></p><br>
        <br>

        <h2 class="food-title">Menu Enfant</h2><br>
        <p class="food-text"><a id="me1" onclick="getId(this.id)" href="#box">Burger Maison ou Nuggets, Frites ou Salade, 1 ou 2 Boules de Glace (Selon parfum Disponible) Plus boisson)<span class="prix">12.50eur</span></a></p><br>
        <br>

        <h2 class="food-title">Supplément</h2><br>
        <p class="food-text"><a id="s1" onclick="getId(this.id)" href="#box">Frites<span class="prix">2.50eur</span></a></p><br>
    </div>

<div id="box">
    <div class="image">
        <div class="icon-remove blue delete">		
            <img id="thumbnail" src="#">
            <i id="delete-button">
                <span class="close-span"></span>
                <span class="close-span"></span>
            </i>
        </div>
    </div>
</div>    
    <footer>
    <p>Le Belvédère met un point d'honneur à travailler des produits frais et locaux <br>autant que possible afin de favoriser les producteurs de proximité.<br><br><a href="https://www.google.com/maps/place/17+Bd+de+la+Pierre+Lys,+11500+Belvianes-et-Cavirac/@42.8520092,2.1989043,17z/data=!3m1!4b1!4m5!3m4!1s0x12afc1dcd11b1e7b:0x9c78877321383891!8m2!3d42.8520092!4d2.201093?hl=fr">Le Belvédère Restaurant et Auberge, 17 Bd de la Pierre Lys, 11500 Belvianes-et-Cavirac</a> | Tél : <a href="tel:+330468202031">0468202031</a> | E-mail : <a href="mailto:Lebelvedere.belvianes@gmail.com">Lebelvedere.belvianes@gmail.com</a><br>Siret N°91211583900017</p>
    </footer>

    <br><br><br><br>
    <script type="text/javascript" src="./assets/js/carte.js"></script>
</body>
</html>