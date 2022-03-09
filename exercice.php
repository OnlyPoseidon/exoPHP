<?php
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
    echo 'La moyenne est de '.$moyenne.' / 20.';
  ?>

<?php
    $prix_ht = 50;
    $tva = 20;
    $prix_ttc = $prix_ht + ($prix_ht * ($tva / 100));
    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
  ?>