<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction === 'gras') {
        $str = mettreEnGrasMotsCommencantParMajuscule($str);
    } elseif ($fonction === 'cesar') {
        $str = decalageCesar($str, 2); // Par défaut, décalage de 2
    } elseif ($fonction === 'plateforme') {
        $str = ajouterUnderscoreMotsFinissantParMe($str);
    }

    echo $str;
}

function mettreEnGrasMotsCommencantParMajuscule($str) {
    // Votre code pour mettre en gras les mots commençant par une majuscule
    return $str;
}

function decalageCesar($str, $decalage) {
    // Votre code pour effectuer le décalage César
    return $str;
}

function ajouterUnderscoreMotsFinissantParMe($str) {
    // Votre code pour ajouter un "_" aux mots finissant par "me"
    return $str;
}
?>
