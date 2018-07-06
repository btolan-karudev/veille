<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/07/2018
 * Time: 17:35
 */

// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

echo "<br><br><br>";

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

echo "<br><br><br>";


if (array_key_exists('bed', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
} else {
    echo 'La cle n bed existe pas';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}


echo "<br><br><br>";


$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}

echo "<br><br><br>";

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;





