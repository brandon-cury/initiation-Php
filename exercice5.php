<?php
//partie 1
function get_feries(int $jour, int $mois, int $annee, string $nom_du_jour){
    $status = 'non';
    if($nom_du_jour != 'samedi' || $nom_du_jour != 'dimanche'){
        if($nom_du_jour == 1 && ($mois == 1 || $mois == 11)){
            $tatus = 'férié';
        }
        elseif($nom_du_jour == 21 && $mois == 7){
            $tatus= 'férié';
        }
        elseif($nom_du_jour == 15 && $mois == 8){
            $tatus= 'férié';
        }
        elseif($nom_du_jour == 11 && $mois == 11){
            $tatus= 'férié';
        }
        elseif($nom_du_jour == 25 && $mois == 12){
            $tatus= 'férié';
        }
        
    }
    return $status;
}
echo get_feries(1, 11, 2023, 'samedi');

//corriger
if($jour != 'samedi')