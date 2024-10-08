<?php

// associative array
$notes = [ 'Dominique' => 17.5, 'Patrick' => 16, 'Jean' => 10, 'Leïla' => 7, 'Christophe' => 12, 'Eric'
=> 2, 'François' => 10, 'Vladimir' => 0, 'Loïc' => 13, 'Sophie' => 14, 'Louka' => 12, 'Emmanuel'
=> 8, 'Marie' => 15, 'Hugo' => 18 ];

//fonction permettrant de definir le grade d'un étudiant
function grade(float $note) : string
{
    $distintion = ' ';

    if($note == 20){
        $distintion ='La plus haute distinction”';
    }
    elseif($note < 20 && $note >= 18){
        $distintion ='Très grande distinction';
    }
    elseif($note < 18 && $note >= 16){
        $distintion ='Grande distinction';
    }
    elseif($note < 16 && $note >= 14){
        $distintion ='Distinction';
    }
    elseif($note < 16 && $note >= 12){
        $distintion ='Satisfaction';
    }
    elseif($note < 12 && $note >= 10){
        $distintion ='Réussite';
    }
    else{
        $distintion ='Échec';
        $distintion ='Échec';
    }
    
    return $distintion;
}

// boucle de parcours foreach où $key représente la clé associée à $value qui représente chaque valeur
foreach ($notes AS $key => $value) {
    // si l'élément du tableau n'est pas numérique et est strictement différent de 0
    if (!is_numeric($value) && $value !== 0) {
        echo "La note de " . $key . " n’ a pas été encodée" . PHP_EOL;
    } else{
        echo nl2br($key . ' ' . $value . ' ' . grade($value) . PHP_EOL);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Etudiant</td>
                <td>Note</td>
                <td>Grade</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes AS $key => $value) { 
                if (!is_numeric($value) && $value !== 0) {
                ?>
                <p><?php echo "La note de " . $key . " n’ a pas été encodée" . PHP_EOL; ?></p>
                <?php } ?>
                <tr>

                </tr>

            <?php } ?>

        </tbody>
    </table>
</body>
</html>