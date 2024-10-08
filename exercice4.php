<?php

// script permettant d'envoyer un message

$etudiants = 'Brandon';
$note = 18;
if($note == 20){
    echo 'parfait';
}elseif($note >= 18){
    echo 'excellent';
}elseif($note >= 16){
    echo 'très bien';
}elseif($note >= 14){
    echo 'satisfaisant';
}elseif($note >= 10 ){
    echo 'réussite'
}else{
    echo 'echec';
}

?>







