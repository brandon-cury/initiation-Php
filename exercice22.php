<?php
// en utilisant des fonctions !!!!!!!!!!!!

// Écrire une fonction qui prend en paramètre un tableau de nombres et retourne le plus petit et le plus grand nombre.
function petitAndGrandNumb(array $array){
    $newArray = [];
    $newArray['petite'] = min($array);
    $newArray['grande'] = max($array);
    return $newArray;
}