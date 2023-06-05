<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        default:
            return "Erreur : opérateur non valide";
    }
}

// Exemple d'utilisation de la fonction
$resultat = calcule(5, '+', 3);  // Addition : 5 + 3
echo $resultat;  // Affiche 8

$resultat = calcule(10, '*', 4);  // Multiplication : 10 * 4
echo $resultat;  // Affiche 40

$resultat = calcule(8, '/', 2);  // Division : 8 / 2
echo $resultat;  // Affiche 4

$resultat = calcule(7, '%', 3);  // Modulo : 7 % 3
echo $resultat;  // Affiche 1
?>