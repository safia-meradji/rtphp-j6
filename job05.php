<?php
function occurrences($str, $char) {
    $count = 0;
    $strLength = strlen($str);

    for ($i = 0; $i < $strLength; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }

    return $count;
}

// Exemple d'utilisation de la fonction
$texte = "Bonjour";
$caractere = "o";
$resultat = occurrences($texte, $caractere);
echo $resultat;  // Affiche 2
?>