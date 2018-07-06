<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 06/07/2018
 * Time: 15:14
 */



$variable = 23;

if ($variable == 23)
{
?>
<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !  <br><br><br>
<?php
}

//on peut couper le code php au milieu pour inserer du code html par example et on peut demarer mille fois le code PHP



$autorisation_entrer = "Nzon";

if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    echo 'Bonjour les amis';
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    echo 'Je n ai suis pa dispo';
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?<br><br><br>";
}



$note = 20;

if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($note == 5)
{
    echo "Tu es très mauvais";
}

elseif ($note == 7)
{
    echo "Tu es mauvais";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($note == 12)
{
    echo "Tu es assez bon";
}

elseif ($note == 16)
{
    echo "Tu te débrouilles très bien !";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !";
}

else
{
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

echo "<br><br><br>";


$note = 0;

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;

    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
    break;

    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
    break;

    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;

    case 12:
        echo "Tu es assez bon";
    break;

    case 16:
        echo "Tu te débrouilles très bien !";
    break;

    case 20:
        echo "Excellent travail, c'est parfait !";
    break;

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

echo "<br><br><br>";

//les breacks sont tres importants sinon on affiche toute les cases
//Le mot-clédefaultà la fin est un peu l'équivalent duelse. C'est le message qui s'affiche par défaut quelle que soit la valeur de la variable.


   /*
    * les ternaires
    *
    */
$age = 15;

if ($age >= 18)
{
	$majeur = true;
	    echo 'Tu est un grand bebe!!!';

}
else
{
	$majeur = false;
    echo 'Tu est un petit bebe!!!';
}

echo "<br><br><br>";

$age = 24;

$b = "Tu est un Adult";
$c = "Tu est un Enfant";

$majeur = ($age >= 18) ? $b : $c;

echo $majeur;




