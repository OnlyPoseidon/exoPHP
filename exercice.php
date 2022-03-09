<?php
/*
// EXERCICE 1
Les variables avec un nom valide sont: $a, $1a, $a1

    $a = "42";
    $b = 42;
    $c = 'Hello World!';
    echo "$a $b $c"

    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
    echo 'La moyenne est de '.$moyenne.' / 20.';

    $prix_ht = 50;
    $tva = 20;
    $prix_ttc = $prix_ht + ($prix_ht * ($tva / 100));
    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';

    $test = 42;
    var_dump(strval($test))


// EXERCICE 2

    $sexe = "pouet";
    if ($sexe === "pouet") {
        echo 'c\'est bien pouet';
    } else {
        echo 'RIP pas de pouet';
    }
    echo "\n";
    echo "\n";

    $budget = 1553.89;
    $achats = 1554.76;
    if ($budget >= $achats) {
        echo 'opération reussi avec succes';
    } else {
        echo 'opération résulte d\'une erreur';
    }
    echo "\n";
    echo "\n";

    $age = readline('Quel âge as-tu : ');
    if ($age >= 18) {
        echo 'Vous etes majeure';
    } elseif ($age < 18) {
        echo 'vous etes un sous fifre';
    }
    echo "\n";
    echo "\n";

    $heure = (int)readline('Quel heure est t\'il ? : ');
    if (7 < $heure && $heure <= 12) {
        echo "c'est le matin";
    } elseif (12 < $heure && $heure < 17) {
        echo "c'est l'apres-midi";
    } elseif ((18 < $heure && $heure < 24) || (0 <= $heure && $heure < 7)){
        echo "c'est la nuit";
    } else {
        echo "erreur donne un chiffre compris entre 0 et 24";
    }
    echo "\n";
    echo "\n";
*/

// EXERCICE 3

$codepostal = 77000;
while($codepostal <= 77999) {
    echo ' ' , $codepostal++;
}
echo "\n";
echo "\n";

?>
