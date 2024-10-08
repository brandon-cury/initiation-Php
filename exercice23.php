<?php
// en utilisant des fonctions !!!!!!!!!!!!

// fonction pour calculer les points des élèves. 2 conditions à la réussite: tous les contrôles doivent être réussis MAIS la moyenne des points doit être supérieur à 14

function point($array) : array
{
    $point = [];
    foreach($array as $key => $items){
        $sommes = 0;
        $moyenne = 0;
        $reusite = true;
        foreach($items as $item){
            if($item > 10){
                $sommes += $item;
            }else{
                $reusite = false;
            }
        }
        $moyenne = $sommes/cout($array);
        $point[$key] = ['moyenne'=> $moyenne, 'reussite'=> $reusite ];
    }

    return $point;
}

//afficharge
$point = ['jeane'=> [1, 2, 14, 20], 'alina'=> [3, 10, 11]];
point($point);