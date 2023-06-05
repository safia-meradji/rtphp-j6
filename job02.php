<?php
function bonjour($jour) {
    $heure = date('H'); // Obtient l'heure actuelle (au format 24 heures)
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemple d'utilisation de la fonction
$estJour = true;
bonjour($estJour);  // Affiche "Bonjour"

$estJour = false;
bonjour($estJour);  // Affiche "Bonsoir"


?>

