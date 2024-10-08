<?php
/**
 * Creation du programme du Euro Million
 * notre programme respecte la structure suivante : initialisation, developpement du système et enfin afficharge
 */

/**
 * Initialisation du jeux Euro Million
 * insérez une chaine de caractère contenant 6 chiffres séparés par des espaces dans la variable $chiffres
 * insérez une chaine de caractère contenant 2 lettres séparés par des espaces dans la variable $lettres
 */
$chiffres = '10 21 9 0 23 6';
$lettres = 'A B';


//Obtention d'une combinaison aléatoire et du nombre de bonne réponse dans un tableau
$resulLoto = lotoSystem($chiffres, $lettres);
//Obtention des gains à partir du nombre de bonne réponse
$gain = gain($resulLoto['true_combinaison']);

/**
 * lotoSystem retourne un tabelau contenant une combinaison aléatoire et le nombre de bonne réponse
 * $chiffres string contenant 6 chiffres espacés par des espaces
 * $lettres string contenant 2 lettres espacés par des espaces
 */
function lotoSystem(string $chiffres, string $lettres): array
{
    //Génération de 6 chiffres aléatoire espacés par des espaces
    $lotoChiffres = genereNumber();
    //Génération de 2 lettres aléatoire espacés par des espaces
    $lotoLettres = genereLetter();
    //Obtention final d'une combination aléatoire par concaténation
    $lotoCombinaison = $lotoChiffres . ' ' . $lotoLettres;
    //Obtention du nombre de bonne réponse des chiffres
    $num_comb_chif = compare($lotoChiffres, $chiffres);
    //Obtention du nombre de bonne réponse des lettres
    $num_comb_let = compare($lotoLettres, $lettres);
    //Obtention du nombre final de bonne réponse
    $lotoBonneCombine = $num_comb_chif + $num_comb_let;
    //retour de la combianison aléatoire final et du nombre de bonne réponse final
    return ['loto_combinaison'=> $lotoCombinaison, 'true_combinaison'=> $lotoBonneCombine ];
    
}

/**
 * genereNumber est une fonction récursive qui retourne enfin de cycle une chaine de caractère de 6 chiffres différents séparés par des espaces
 * $combinaisonNumber est la mémoire interne utiliser par la function pour stocker des nombres et tester s'ils existent déjà 
 */
function genereNumber(string $combinaisonNumber = '')
{
    //Génération aléatoire de nombre comprit entre 1 et 42
    $numb = rand(1, 42);
    //Verifier si le nombre n'est pas encore inséré dans notre chaine de caractère final
    if(strpos($combinaisonNumber, $numb) === false){
        //Insérer le nombre dans notre chaine de caractère final
        $combinaisonNumber .= ' ' . $numb;
    }
    //Retirer l'espace de debut et Transformer notre chaine de caractère en tabelau en utilisant des espaces comme séparateur d'élément
    $array_comb = explode(' ', ltrim($combinaisonNumber));
    //Compter le nombre d'élément du tableau
    $array_count = count($array_comb) ;
    //Verifier si le nombre d'élément est inférieur à 6
    if($array_count < 6){
        //Rappeler la fonction genereNumber
        return genereNumber($combinaisonNumber);
    }
    //Renvoyer les 6 chiffres aléatoires sous forme de chaine de caractère espacée par des espaces
    return $combinaisonNumber;
}

/**
 * genereLetter retourne une chaine de caractère contenant 2 lettres séparer par des espaces
 */
function genereLetter(): string
{
    //Creation d'une chaine de caratère contenant tous les lettres de l'alphabet francais
    $combinaison = 'abcdefghijklmnopqrstuvwxyz';
    //Initialisation de la variable $lettre
    $letter = '';
    //Parcourir 2 fois
    for($i = 0; $i < 2; $i++){
        //Générer un nombre aléatoire entre 0 et 25
        $numb = rand(0, 25);
        //trouver la lettre correspondant au chiffre généré et l'ajouter a la chaine de caractère contenu dans $letter
        $letter .= ' ' . $combinaison[$numb];
    }
    //retourner la chaine de caractère contenant 2 lettres séparer par des espaces
    return $letter;
}

/**
 * la methode compare() retourne le nombre de bonne réponse après comparaison
 * $str est la chaine où se trouve les bonnes réponses séparer par des espaces
 * $carat est la chaines contenant les élément à vérifier, séparer par des espaces
 */
function compare(string $str, string $carat): int
{
    //Transformer notre chaine de caractère contenant les bonnes réponses en tabelau en utilisant des espaces comme séparateur d'élément
    $array_comb = explode(' ', $str);
    //Transformer notre chaine de caractère contenant les élément à vérifier en tabelau en utilisant des espaces comme séparateur d'élément
    $array_carat = explode(' ', strtolower($carat));
    //Compter le nombre d'élément à vérifier
    $str_count = count($array_carat);
    //Initialiser le compteur de bonne réponse
    $compte = 0;
    //Répéter l'opération pour chaque élément à vérifier
    for($i = 0 ;  $i < $str_count ; $i++){
        //Vérifier si l'élément à vérifier se trouve dans le tableau des bonnes combinaisons
        if(in_array($array_carat[$i], $array_comb)){
            //incrémenter de plus 1 le nombre de bonne réponse
            $compte++;
        }
    }
    //retourner le nombre de bonne réponse
    return $compte;
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
echo nl2br('Les resultats sont : ' . $resulLoto['loto_combinaison'] . PHP_EOL);
//Afficharge du nombre de bonne réponse sur une ligne
echo nl2br('Vous avez : ' . $resulLoto['true_combinaison'] . ' bonnes réponses' . PHP_EOL);
//Afficharge des gains 
echo 'Vous avez gagné : ' . $gain . ' €';