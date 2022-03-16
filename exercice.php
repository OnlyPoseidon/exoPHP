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
*/

// ======================================
// EXERCICE 2
/*
    $sexe = "pouet";
    if ($sexe === "pouet") {
        echo 'c\'est bien pouet';
    } else {
        echo 'RIP pas de pouet';
    }
------------------

    $budget = 1553.89;
    $achats = 1554.76;
    if ($budget >= $achats) {
        echo 'opération reussi avec succes';
    } else {
        echo 'opération résulte d\'une erreur';
    }
------------------

    $age = readline('Quel âge as-tu : ');
    if ($age >= 18) {
        echo 'Vous etes majeure';
    } elseif ($age < 18) {
        echo 'vous etes un sous fifre';
    }
------------------

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
*/

// ======================================
// EXERCICE 3
/*
    $codepostal = 77000;
    while($codepostal <= 77999) {
        echo ' ' , $codepostal++;
    }
------------------


    for($multi = 0; $multi <= 10; $multi++) {
        echo '5 x ' . $multi . " = " . (5 * $multi) . "\n";
    }
------------------

    for($numero = 1; $numero <= 5; $numero++) {
        for($suite = 1; $suite <= $numero; $suite++) {
            echo $numero;
        }
        echo "\n";
    }
------------------

$pouet = 0;
while($pouet < 20) {
    $pouet += 2;
    if($pouet == 10) {
        echo "\n" . $pouet . "\n \n";
    }else {
        echo $pouet . "\n";
    }
}
*/

// ======================================
// EXERCICE 4
/*
    for ($etoile = 1; $etoile <= 8; $etoile++) {
        for($suite = 1; $suite <= $etoile; $suite++) {
            echo "*";
        }
        echo "\n";
    }
------------------

    for ($etoile = 1; $etoile <= 8; $etoile++) {
        for($suite = 1; $suite <= 8; $suite++) {
            echo "*";
        }
        echo "\n";
    }
------------------

    for ($etoile = 8; $etoile >= 0; $etoile--) {
        for($suite = 1; $suite <= $etoile; $suite++) {
            echo "*";
        }
        echo "\n";
    }
*/

// ======================================
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
------------------

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

------------------

    $tabprincipale = [
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
        rand(0, 100),
    ];

    $tab1 = [];
    $tab2 = [];

    foreach ($tabprincipale as $numero) {
        if ($numero < 50) {
            $tab1[] = $numero;
        } else {
            $tab2[] = $numero;
        }
    }

    echo 'tableau < 50 : ';
    foreach ($tab1 as $numero1) {
        echo $numero1 . " ";
    }
    echo "\n";

    echo 'tableau > 50 : ';
    foreach ($tab2 as $numero2) {
        echo $numero2 . " ";
    }
    echo "\n";

    ------------------

    $pays_population = [
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    ];

    echo 'les pays qui ont une population supérieur ou égales a 20M d\'habitant : ';
    foreach($pays_population as $pays => $population) {
        if($population >= 20000000) {
            echo "\n - $pays";
        }
    }

    ------------------

    $pays_population = [
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    ];

    var_dump(count($pays_population));

    ------------------

    $cocktails = [
        'Mojito',
        'Long Island Iced Tea',
        'Gin Fizz',
        'Moscow mule',
    ];

    echo $cocktails[1]

    ------------------

    $personnes = [
        'Jean' => 16,
        'Manuel' => 19,
        'André' => 66,
    ];

    echo $personnes['Manuel'];
*/

// ======================================
// EXERCICE 6
/*
    header('Location: test');

    ------------------

    $_SERVER['SERVER_PROTOCOL']

    ------------------

    $tab = array_unique ($tab)
*/

// ======================================
// EXERCICE 7
/*
    function helloworld() {
        echo "Hello World!";
    }

    helloworld();

    ------------------

    function quiEstLeMeilleurProf($nom){
        echo "Le prof de " . $nom;
    }

    quiEstLeMeilleurProf('programmation Web');

    ------------------

    function jeRetourneMonArgument($argument){
        return $argument;
    }

    echo jeRetourneMonArgument("abc");

    ------------------

    function fonction(string $argument1 , string $argument2) {
        return $argument1 . " " . $argument2;
    }

    echo fonction("Antoine" , "Griezmann");

    ------------------

    function somme(int $argument1 , int $argument2) {
        return $argument1 + $argument2;
    }

    echo somme(5 , 5);

    ------------------

    function soustraction (int $argument1 , int $argument2) {
        return $argument1 - $argument2;
    }

    echo soustraction(5 , 5);

    ------------------

    function multiplication (int $argument1 , int $argument2) {
        return $argument1 * $argument2;
    }

    echo multiplication(5 , 5);

    ------------------

    function estIlMajeure(int $age) {
        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    }

    $age = readline("Quel age as-tu ?");
    var_dump(estIlMajeure($age)) ;

    ------------------

    function plusGrand(int $nb1 , int $nb2) {
        if ($nb1 > $nb2) {
            return $nb1;
        } else {
            return $nb2;
        }
    }

    echo plusGrand(18 , 20);

    ------------------

    function plusPetit(int $nb1 , int $nb2) {
        if ($nb1 < $nb2) {
            return $nb1;
        } else {
            return $nb2;
        }
    }

    echo plusPetit(18 , 20);

    ------------------

    function plusPetit(int $nb1 , int $nb2 , int $nb3) {
        if ($nb1 < $nb2 && $nb1 < $nb3) {
            return $nb1;
        } elseif ($nb2 < $nb3 && $nb2 < $nb3) {
            return $nb2;
        } else {
            return $nb3;
        }
    }
    echo plusPetit(18 , 12, 19);
*/

// ======================================
// EXERCICE 8
/*
    $array = [
        8 => "clients",
        10 => "notes",
        12 => "poids",
    ];
    function premierElementTableau(array $argument){
        if (empty ($argument)) {
            return null;
        } else {
            return array_slice($argument, 0, 1)[0];;
        }
    }

    echo premierElementTableau($array);

    ------------------

    $array = [
        8 => "clients",
        10 => "notes",
        12 => "poids",
    ];
    function dernierElementTableau(array $argument){
        if (empty ($argument)) {
            return null;
        } else {
            return end($argument);
        }
    }

    echo dernierElementTableau($array);

    ------------------

    $array = [
        8,
        10,
        12,
    ];
    function plusGrand(array $argument){
        if (empty ($argument)) {
            return null;
        } else {
            return max($argument);
        }
    }

    echo plusGrand($array);

    ------------------

    $array = [
        8,
        10,
        12,
    ];
    function plusPetit(array $argument){
        if (empty ($argument)) {
            return null;
        } else {
            return min($argument);
        }
    }

    echo plusPetit($array);

    ------------------

    function verificationPassword(string $argument){
        if (strlen($argument) < 8) {
            return true;
        } else {
            return false;
        }
    }

    var_dump (verificationPassword("password"));
    
    ------------------


                ***********************
                ****REGEX compliqué****
                ***********************

    function verificationPassword(string $argument){
        if (strlen($argument) < 8 && )

    ------------------
*/
    function capital(string $argument) {
        switch ($argument) {
            case 0:
                echo "i égal 0";
                break;
            case 1:
                echo "i égal 1";
                break;
            case 2:
                echo "i égal 2";
                break;
        }
    }
?>