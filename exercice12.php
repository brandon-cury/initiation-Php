<?php
// Fontion pour verifier si un jour est férié ou pas
function getHoliday(int $jour, int $mois, int $annee, string $nom_du_jour) : bool
{
    $holiday = false;

    if(($nom_du_jour != 'samedi' || $nom_du_jour != 'dimanche') && 
    (
        ($jour == 1 && ($mois == 1 || $mois == 5 || $mois == 11) ||
        ($jour == 21 && $mois == 7) ||
        ($jour == 15 && $mois == 8) ||
        ($jour == 11 && $mois == 11) ||
        ($jour == 25 && $mois == 12) )
    
    )
    ){
        
        $holiday = true; 

    }
    return $holiday;


}

//verifier si le 29 sera ferier ou pas
function getBirthday(int $jour, int $mois, int $annee) : bool
{
    $birthday = false;
    if($jour == 29 && $mois==2 && 
        ( 
            ($annee % 4 === 0 && $annee % 100 !== 0) ||
            ($annee % 100 === 0 )
        )
    ){
        $birthday = true;
    }

    return $birthday;
}

//exemple d'afficharge
echo getHoliday(1, 1, 2000, 'samedi') . PHP_EOL;
echo getBirthday(29, 2, 100);


