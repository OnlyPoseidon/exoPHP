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

echo "\n";
echo "\n";
*/

// EXERCICE 2
/*
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
/*
    $codepostal = 77000;
    while($codepostal <= 77999) {
        echo ' ' , $codepostal++;
    }
echo "\n";
echo "\n";


    for($multi = 0; $multi <= 10; $multi++) {
        echo '5 x ' . $multi . " = " . (5 * $multi) . "\n";
    }
echo "\n";
echo "\n";

    for($numero = 1; $numero <= 5; $numero++) {
        for($suite = 1; $suite <= $numero; $suite++) {
            echo $numero;
        }
        echo "\n";
    }
echo "\n";
echo "\n";

$pouet = 0;
while($pouet < 20) {
    $pouet += 2;
    if($pouet == 10) {
        echo "\n" . $pouet . "\n \n";
    }else {
        echo $pouet . "\n";
    }
}
echo "\n";
echo "\n";
*/

// EXERCICE 4
/*
    for ($etoile = 1; $etoile <= 8; $etoile++) {
        for($suite = 1; $suite <= $etoile; $suite++) {
            echo "*";
        }
        echo "\n";
    }
echo "\n";
echo "\n";

    for ($etoile = 1; $etoile <= 8; $etoile++) {
        for($suite = 1; $suite <= 8; $suite++) {
            echo "*";
        }
        echo "\n";
    }
echo "\n";
echo "\n";

    for ($etoile = 8; $etoile >= 0; $etoile--) {
        for($suite = 1; $suite <= $etoile; $suite++) {
            echo "*";
        }
        echo "\n";
    }
echo "\n";
echo "\n";
*/

// EXERCICE 5
/*
    $geo = [
        'France' => 'Paris',
        'Allemagne' => 'Berlin',
        'Italie' => 'Rome',
    ];
    foreach($geo as $capitale) {
        echo $capitale . "\n";
    }
echo "\n";
echo "\n";

$tab = [
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
];

var_dump($tab);

if(in_array(42, $tab)) {
    echo "chiffre 42 trouvé";
}else {
    echo "chiffre 42 non trouvé";
}

echo "\n";
echo "\n";

*/

$tab = [
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
    rand(0, 50),
];

var_dump($tab);
?>
