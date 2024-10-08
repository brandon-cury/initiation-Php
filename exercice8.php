<?php
// Exercice 1: Sans boucle de parcours
$nomb = rand(5, 20);
$table = [];
$table_sup = [];
$table_inf = [];
$table_egal = [];

for($a=0; $a < $nomb; $a++){
    $value = rand(5, 100);
    $table[] = $value;

    if($value > 50){
        $table_sup[] = $value;
    }
    elseif($value < 50){
        $table_inf[] = $value ;
    }
    else{
        $table_egal[] = $value;
    }
}

//Afficharge 
//nombre total de valeur
echo nl2br('Le nombre total de valeur du tableau est de :' .$nomb . "\n");

$nomb_inf = count($table_inf);
$pourcent_inf = ($nomb_inf*100)/$nomb;
//nombre de valeur inférieur à 50
echo nl2br('Le nombre de valeur inférieur à 50 est de : '. $nomb_inf . ', soit : ' . $pourcent_inf . '%' . "\n");

$nomb_sup = count($table_sup);
$pourcent_sup = ($nomb_sup*100)/$nomb;
//nombre de valeur supperieur à 50
echo nl2br('Le nombre de valeur supperieur à 50 est de : ' . $nomb_sup . ', soit : ' . $pourcent_sup . '%' . "\n");

$nomb_egal = count($table_egal);
$pourcent_egal = ($nomb_egal*100)/$nomb;
//nombre de valeur égale à 50
echo nl2br('Le nombre de valeur égale à 50 est de : ' . $nomb_egal . ', soit : ' . $pourcent_egal . '%' . "\n");



