<?php

try
{
    $bdd = new PDO('mysql:host=localhost;
        dbname=belvedere_bdd;
        charset=utf8', 
        'root', 
        '');
    }

catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>