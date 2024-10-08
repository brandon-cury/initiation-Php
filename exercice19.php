<?php
// en utilisant des fonctions !!!!!!!!!!!!

// donne le carré d'un chiffre (attention si le nbre est 0)


function carre(int $nomb)
{

    if($nomb > 0){
        return $nomb * $nomb;
        
    }
    return 'impossible';

}

//afficharge
echo carre(8);

