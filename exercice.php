<?php

/**
 * Devoir DE Moukam Brandon-Cury 
 * Création de variables
 * Mettre les commentaires
 * Affichez les différentes variables déclarées dans votre script.
 */


$code_postal = 5000; //code postal ou '5000'
$bool = true; //boolean
$quantity = 0; //entier
$status = false; //statut de connexion d'un utilisateur
$jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']; // utiliser var_dump() pour l'afficharge; list contenant les jours de la semaine
$id = 1; //identifiant d'un user
$prix = 00.0 ; //float
$email = 'moukambrandon@gmail.com'; // email user
$note = [12, 13, 34, 67];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
</head>
<body>
    <h1>Exercice d'initiation à la Programmation</h1>
    <h3>Afficharge de quelques variables</h3>
    <p>Votre code postal est : <?= $code_postal ?></p>
    <p>Afficharge d'un boolean : <?= $bool ?></p>
    <p>Afficahrge d'un entier : <?= $quantity ?></p>
    <p>Afficharge d'un statut d'une connexion : <?= $status ?></p>
    <p>Afficharge des jours de la semaine : </p>
    <ol>
        <?php  foreach($jours as $jour){ ?>
            <li> <?= $jour ?></li>
        <?php } ?>
    </ol>
    <p>Afficharge des identifiants d'un utilisateur : <?= $id ?></p>
    <p>Afficharge du prix d'un article :</p>
    <p>Afficharge du prix : <?= $prix ?></p>
    <p>Email de l'utilisateur :</p>
    <p>Afficharge de l'email : <?= $email ?></p>
    <p>Afficharge des notes d'un étudiant</p>
    
        <?php  foreach($note as $user => $matieres){?>
            <p>Name User: <?= $user ?></p>
            <?php  foreach($matieres as $matiere => $cours){?>
                <ol>
                    <li> <?= $matiere ?> : 
                            <ul>
                                <?php  foreach($cours as $cour){?>
                                    <li><?= $cour ?></li>
                                <?php } ?>
                            </ul>
                    </li>
                </ol>

        <?php }} ?>

</body>
</html>




