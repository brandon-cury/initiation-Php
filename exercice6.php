<?php
//partie 2
//on va utiliser git
function get_feries(int $jour, int $mois, int $annee, string $nom_du_jour){
    $status = 'non';
    $aniversaire = 'non';
    if($nom_du_jour != 'samedi' || $nom_du_jour != 'dimanche'){ 
        if($jour == 1 && ($mois == 1 || $mois == 5 || $mois == 11)){

            $status = 'férié';
        }
        elseif($jour == 21 && $mois == 7){
            $status= 'férié';
        }
        elseif($jour == 15 && $mois == 8){
            $status= 'férié';
        }
        elseif($jour == 11 && $mois == 11){
            $status= 'férié';
        }
        elseif($jour == 25 && $mois == 12){
            $status= 'férié';
        }
        
    }

    if($jour == 29 && $mois==2 ){
        if(is_int($annee % 4) && !is_int($annee % 100)){
            $aniversaire = 'oui';
        }
        if(is_int($annee % 100)){
            $aniversaire = 'oui';
        }
    }


    return ['jour férié' => $status, 'jour d\'aniversaire' => $aniversaire];
}
 print_r(get_feries(29, 2, 2023, 'lundi'));