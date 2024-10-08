<?php
// en utilisant des fonctions !!!!!!!!!!!!

/*
Courses à l'école

Lucas a fait 22,4 secondes
Elodie a fait 24,5 secondes
Marc a fait 19,9 secondes
Julie a fait 18,8 secondes
Usain a fait 12,2 secondes
a) Classez les élèves par ordre alphabétique avec leur temps à coté

aaaa avec un temps de XXXX secondes
bbb avec un temps de XXX secondes

b)Afficher un classement avec les meilleurs temps dans le style suivant. Tous les élèves avec un temps inférieur à 20 secondes sont qualifiés  

1) XXXXX en XXXX secondes  est QUALIFIE ou NON qualifé
2) XXXXX en XXXX secondes
etc


*/
$eleve = [
    'Lucas' => 22.4 ,
    'Elodie' => 24.5,
    'Marc' => 19.9,
    'Julie' => 18.8,
    'Usain' => 12,2
];
//a) Classez
function nameClass(array $array) {
    ksort($array);
    foreach($array as $key => $value){
        echo $key . ' avec un temps de ' . $value . ' secondes' . PHP_EOL;
    }
}



//b) meilleur
function meilleur(array $array){
    arsort($array);
    $nomb = 1;
    foreach($array as $key => $value){
        $qualifier = 'non qualifié';
        if($value < 20){
            $qualifier = 'qualifié';
        }
        echo $nomb . ') ' . $key . ' avec un temps de ' . $value . ' secondes est ' . $qualifier . PHP_EOL;
        $nomb++;
    }
}



