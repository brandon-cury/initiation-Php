<?php
// en utilisant des fonctions !!!!!!!!!!!!

// Écrire une fonction qui prend en paramètre un tableau de nombres et retourne un tableau contenant les nombres pairs.
function paire(array $table):array
{
    foreach($table as $item){
        $reste = $item % 2;
        if($reste == 0){
            $array_paire[] = $item;
        }
    }
    return $array_paire;
}
