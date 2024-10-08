<?php 


//Créer un programme me permettant de calculer l’air d’un rectangle 
//Le code affichera ceci. 
//L’air du rectangle est de XX m² 


function air(float $long, float $largeur): void
{
    $air = $long*$largeur;
    echo nl2br("L’air du rectangle est de  $air m²". PHP_EOL);
}

//air(2, 4);
//------------------------------- 

 

/*Créer un programme pour calculer la taille de mes titres H2 et H1 par rapport à la taille de mes paragraphes. Pour faciliter le travail,  un h2 fait 2X la taille de mes paragraphes et mes h1 font 3x la taille de mes paragraphes 

Le code affichera ceci : 

Vos paragraphes font : XXX px 

Vos titres h2 font : XXXX px 

Vos titres h1 font :  XXX px 
*/

function tailleTitre(float $tailleParagraph): void
{
    $h2 = $tailleParagraph*2;
    $h1 = $tailleParagraph*3;
    echo nl2br("Vos paragraphes font : $tailleParagraph px" . PHP_EOL);
    echo nl2br("Vos titres h2 font : $h2 px" . PHP_EOL);
    echo nl2br("Vos titres h1 font :  $h1 px ". PHP_EOL);

}

//tailleTitre(2);



// ------------------------------ 

 

/*Pour votre équipe de foot masculine, vérifiez pour l’inscription que l’enfant est bien un garçon et selon son année de naissance, indiquez dans quelle équipe il va jouer. Votre club ne dispose que de ces catégories-là. Si l’enfant n’est pas dans ces années-là, vous ne pourrez pas l’inscrire. 

U12 2011-2012  

U14 2009-2010  

U16 2007-2008 

Le code affichera ceci : 

Vous êtes bien accepté dans notre équipe et vous pourrez jouer avec l’équipe XXXX 
*/

function inscriptionClub(string $sexe, int $annee) : void
{
    if($annee == 2011 || $annee == 2012){
        echo "Vous êtes bien accepté dans notre équipe et vous pourrez jouer avec l’équipe U12 2011-2012";
    }
    elseif($annee == 2009 || $annee == 2010){
        echo "Vous êtes bien accepté dans notre équipe et vous pourrez jouer avec l’équipe U14 2009-2010";
    }
    elseif($annee == 2007 || $annee == 2008){
        echo "Vous êtes bien accepté dans notre équipe et vous pourrez jouer avec l’équipe U16 2007-2008";
    }else{
        echo "Pas d'inscription possible";
    }
}

//inscriptionClub('h', 2011);














// ------------------------------- 

 

/*Face à un nombre choisi, écrivez-moi un programme qui me dessine un carré dont la longueur du coté est le nombre choisi. 

Par exemple si je donne comme taille 3, le programme m’affichera ceci 

*** 

*** 

*** 
*/

 


?>