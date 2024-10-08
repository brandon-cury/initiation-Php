<?php

// associative array
$notes = [ 'Dominique' => 17.5, 'Patrick' => 16, 'Jean' => 10, 'Leïla' => 7, 'Christophe' => 12, 'Eric'
=> 2, 'François' => 10, 'Vladimir' => 0, 'Loïc' => 13, 'Sophie' => 14, 'Louka' => 12, 'Emmanuel'
=> 8, 'Marie' => 15, 'Hugo' => 18 ];
arsort($notes);
//fonction permettrant de definir le grade d'un étudiant
function gradeNote(float $note) : string
{
    
    $distintion = ' ';

    if($note == 20){
        $distintion ='La plus haute distinction';
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
    }
    
    return $distintion;
}
function colorNote(float $note) : string
{   
    $color = ' ';
    if($note == 20){
        $color= "#FF1493";
    }
    elseif($note < 20 && $note >= 18){
        $color= "#FFA500";
    }
    elseif($note < 18 && $note >= 16){
        $color= "#FFD700";
    }
    elseif($note < 16 && $note >= 14){
        $color= "#FF00FF";
    }
    elseif($note < 16 && $note >= 12){
        $color= "#7CFC00";
    }
    elseif($note < 12 && $note >= 10){
        $color= "#00FFFF";
    }
    else{
        $color= "#FF0000";
    }
    return $color;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table {
        border-color: #8ebf42;
        background-color: #000000;
        color: #ffffff;
      }
      th {
        border-bottom: 5px solid #095484;
      }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Etudiant</th>
                <th>Note</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes AS $key => $value) { 
                
                if (!is_numeric($value) && $value !== 0) {?>
                <p>
                    <?= "La note de " . $key . " n’ a pas été encodée"; ?>
                </p>
                
                <?php }else{ ?>
                <tr>
                    <td ><?= $key ?></td>
                    <td style="color:<?= colorNote($value) ?>"><?= $value ?></td>
                    <td><?= gradeNote($value) ?></td>
                </tr>

            <?php }} ?>

        </tbody>
    </table>
</body>
</html>