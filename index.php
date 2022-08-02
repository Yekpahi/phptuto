<?php

function df($prix)
{
    echo '<pre>';
    var_dump($prix);
    echo '<pre>';
}

$chiffre1 = 200;
df($chiffre1);
$chiffre2 = 100;
df($chiffre2);
$produit = $chiffre1 * $chiffre2;
df($produit);
require 'view.php';
