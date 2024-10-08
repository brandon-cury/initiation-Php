<?php
// Exercice 2: réalisation d'un distributeur

//le client
$montant = 2001;

//la Bank
$bank = [
    '50'=> rand(0, 5),
    '20'=> rand(0, 10),
    '10'=> rand(0, 40),
    '1'=> rand(0, 40)
];

//verifions s'il y a assez de resource en Bank
if($montant >= ($bank['50']*50 + $bank['20']*20 + $bank['10']*10)){
    echo nl2br('il ny a pas assez de recource en Bank désolé' . "\n");
}


//conversion du montant du client en billet de Bank
function caculatorBillet(int $montant, array $bank) : Array
{
    $billets = [];
    $type_billet = count($bank);
    $reste = $montant;
    $bank_order = array_keys($bank);

    while($reste != 0){
        for($i = 0; $i < $type_billet; $i++){
            $biellet_de = $bank_order[$i];
            $nombre_biellet = floor($reste/$biellet_de);
            $surplus_billet = $nombre_biellet - $bank[$biellet_de] ;
            $billet_recu = ($surplus_billet > 0)?$bank[$biellet_de]:$nombre_biellet;
            $billets[$biellet_de] = $billet_recu;
            $reste -= ($billet_recu*$biellet_de);
            if(($i == ($type_billet - 1)) && $reste > 0){
                $billets = [];
                break;
            }
        }
    }
    return $billets;
}


//Mise à jour de la Bank avec le reste des resources
function miseJourBank(array $billets) : Void
{
    global $bank;
    $type_billet = count($bank);
    $bank_order = array_keys($bank);
    $billets_order = array_keys($billets);
    if($billets != false){
        for($i = 0; $i < $type_billet; $i++){
            $bank_order[$i] -=  $billets_order[$i];
        }
    }
}




//EXecution de notre application
$resultat = caculatorBillet($montant, $bank);
miseJourBank($resultat);

//Afficharge
echo nl2br('Montant inséré : ' . $montant . ' €' . "\n");
echo nl2br(print_r($bank) . "\n");
echo nl2br(print_r(caculatorBillet($montant, $bank)) . "\n");
