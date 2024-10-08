<?php
// en utilisant des fonctions !!!!!!!!!!!!

// Faire une fonction qui vérifie sur un nombre est présent dans un tableau donné

function inArray(array $array, string $item): bool
{
    $verif = false;
    if(in_array($item, $array)){
        $verif = true;
    }
    return $verif;
}