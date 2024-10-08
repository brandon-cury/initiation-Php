<?php
/**
 * Creation du programme du Euro Million
 * notre programme respecte la structure suivante : initialisation, verification des données, développement du système et enfin afficharge
 */

/**
 * Initialisation du jeux Euro Million :
 * insérez un tableau contenant 6 chiffres dans la variable $chiffres
 * insérez un tableau contenant 2 lettres comprises entre a..z dans la variable $lettres en majuscule ou en minuscule
 */
$chiffres = [10, 21, 19, 15, 23, 42];
$lettres = ['Q', 'S'];

/**
 * vérification des données insérer par l'utilisateur:
 * 1-vérifier que les chiffres insérés sont uniques et compris entre 1 et 42
 * 2-vérifier que les lettres sont bien des lettres de l'alphabet francais comprises entre a et z
 * Si ces conditions ne sont pas respectées, afficher un message d’erreur
 */
//Obtenir un tableau de chiffre avec des valeurs uniques, sans doublon
$chiffres = array_unique($chiffres); 
//obtenir le tableau de chiffre avec des valeurs comprises entre 1 et 42
$chiffres = array_intersect($chiffres, range(1, 42));
//obtenir le tableau de lettre avec des valeurs comprises entre a et z en minuscule
$lettres = array_intersect(array_map('strtolower', $lettres), range('a', 'z'));
//verifier si le nombre de combinaison de chiffre est different de 6 ou si le nombre de lettre est différent de 2
if(count($chiffres) != 6 || count($lettres) != 2){
    //afficher un méssage d'erreur
    echo 'Message d\'erreur : Veillez insérer 6 chiffres différents compris entre 1..42 et 2 lettres comprises entre a..z';
    //arréter l'execution du code
    exit;
}

/**
 * Développement du système du jeux
 */

//Génération de 6 chiffres aléatoires différents
$lotoChiffres = genereNumber();
//Génération de 2 lettres aléatoires
$lotoLettres = genereLetter();
//Obtention de toute la combinaison aléatoire dans une chaine de caractère
$lotoCombinaison = implode(' ', array_merge($lotoChiffres, $lotoLettres));
//Obtention du nombre de bonne réponse
$lotoBonneCombine = count(array_intersect($chiffres, $lotoChiffres)) + count(array_intersect($lettres, $lotoLettres));
//Obtention des gains à partir du nombre de bonne réponse
$gain = gain($lotoBonneCombine);

/**
 * genereNumber est une fonction récursive qui retourne enfin de cycle un tableau de 6 chiffres différents par défaut 
 * $combinaisonNumber est le tableau de stockage progressive des nombres qui seront retourné en fin de cycle
 * $taille defini la taille du tableau à retourner, Par défaut il est à 6
 */
function genereNumber(array $combinaisonNumber = [], int $taille = 6)
{
    //Génération aléatoire de nombre comprit entre 1 et 42
    $numb = rand(1, 42);
    //Verifier si le nombre n'est pas encore inséré dans notre tableau
    if(!in_array($numb, $combinaisonNumber)){
        //Insérer le nombre dans notre tableau
        $combinaisonNumber[] = $numb;
    }
    //Compter le nombre d'élément du tableau
    $array_count = count($combinaisonNumber) ;
    //Verifier si le nombre d'élément est inférieur à la taille voulu
    if($array_count < $taille){
        //Rappeler la fonction genereNumber
        return genereNumber($combinaisonNumber);
    }
    //Renvoyer le tableau d'élément contenant la taille voulu
    return $combinaisonNumber;
}

/**
 * genereLetter retourne un tableau contenant 2 lettres par défaut 
 * $taille defini la taille du tableau à retourner. Par défaut il est à 2
 */
function genereLetter(int $taille = 2): array
{
    //Creation d'un tableau contenant tous les lettres de l'alphabet francais
    $alphabetFrancais = range('a', 'z');
    //Initialisation du tableau
    $lettres = [];
    //Parcourir n fois la taille voulu, 2 par defaut
    for($i = 0; $i < $taille; $i++){
        //Selectionner une lettre au hasard et la sauvegarder 
        $lettres[] = $alphabetFrancais[array_rand($alphabetFrancais)];
    }
    //retourner le tableau contenant n lettres, 2 par défaut
    return $lettres;
}

/**
 * la méthode gain() retourne un entier correspondans au montant gagnier en fonction du nombre de bonne réponse
 * $nomComb est un entier correspondant au nombre de bonne réponse 
 */
function gain(int $nomComb): int
{
    //initialisation des gains
    $gain = 0;
    //verifi pour chaque nombre de bonne réponse
    switch($nomComb){
        //Si le nombre de bonne réponse est égale à 3, $gain prendra la valeur 10
        case 3: $gain = 10; break;
        //Si le nombre de bonne réponse est égale à 4, $gain prendra la valeur 30
        case 4: $gain = 30; break;
        //Si le nombre de bonne réponse est égale à 5, $gain prendra la valeur 100
        case 5: $gain = 100; break;
        //Si le nombre de bonne réponse est égale à 6, $gain prendra la valeur 1000
        case 6: $gain = 1000; break;
        //Si le nombre de bonne réponse est égale à 7, $gain prendra la valeur 100000
        case 7: $gain = 100000; break;
        //Si le nombre de bonne réponse est égale à 8, $gain prendra la valeur 1000000
        case 8: $gain = 1000000; break;
        //Dans tous les autres cas, $gain prendra la valeur 0
        default: $gain = 0; break; 
    }
    return $gain;
}


/**
 * Retour D'afficharge du jeux Euro Million
*/
//Afficharge du titre du tirage sur une ligne
echo nl2br('Voici le tirage au sort :' . PHP_EOL);
//Afficharge de la combinaison du loto sur une ligne
echo nl2br('Les resultats sont : ' . $lotoCombinaison . PHP_EOL);
//Afficharge du nombre de bonne réponse sur une ligne
echo nl2br('Vous avez : ' . $lotoBonneCombine . ' bonnes réponses' . PHP_EOL);
//Afficharge des gains 
echo 'Vous avez gagné : ' . $gain . ' €';