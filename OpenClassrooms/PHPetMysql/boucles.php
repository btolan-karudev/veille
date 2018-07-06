<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/07/2018
 * Time: 16:18
 */

$nombre_de_lignes = 1;

while ($nombre_de_lignes < 21)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}


echo "<br><br><br>";

//la boucle for est plus complexe et ^plus facile a implemente INIT COND INCREMENT
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 25; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}





