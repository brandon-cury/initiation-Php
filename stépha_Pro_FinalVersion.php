<?php
/**
 * Initialisation du programme 
 */
$numerojoueur = [4, 9, 26, 32, 39, 42];
$lettresjoueur = ['O', 'L'];

/**
 * partie traitement
 */

//génération du code de lotto automatiquement
$tirage = lotto();
//obtenir la combinaison final du joueur
$resultatTicket = ticketjoueur($numerojoueur, $lettresjoueur);
//initialiser le compteur de bonne combianison à 0
$compteurIdentiques = 0;
//obtention du nombre de bonnes combinaisons
foreach ($resultatTicket as $valeurJoueur) {
  if (in_array($valeurJoueur, $tirage)) {
    $compteurIdentiques++;
  }
}

/**
 * fonction lotto() retourne un tableau d'element généré aléatoirement (6 chiffres et 2 lettres)
 */
function lotto() :array{
  $chiffres = genererchiffres();
  $lettres = genereralphabet();
  $resultatfinal = array_merge($chiffres, $lettres);
  return $resultatfinal;
}

/**
 * la fonction genererchiffres retourne un tableau contenant 6 chiffres généré aleatoirement
 */
function genererchiffres()
{ 
  $combinaisonNumber = array();
    while(count($combinaisonNumber) < 6){
      $numb = rand(1, 42);
      if(!in_array($numb, $combinaisonNumber)){
        $combinaisonNumber[] = $numb;
      }
    }
    return $combinaisonNumber;
}

/**
 * la function genereralphabet() retourne deux lettres de alphabet
 */
function genereralphabet(int $long = 2): array {
  $alphabet = range('A', 'Z');
  $lettrealeatoire = array();

  for ($i = 0; $i < $long; $i++) {
    $resultat = $alphabet[array_rand($alphabet)];
    $lettrealeatoire[] = $resultat;
  }

  return $lettrealeatoire;
}

/**
 * la function ticketjoueur() permet de retourner la combinaison total d'un joueur
 * $numerojoueur prend la combinaison de 6 chiffres du joueur
 * $lettresjoueur prend la combinaison de 2 lettres du joueur
 */
function ticketjoueur(array $numerojoueur, array $lettresjoueur):array 
{
  $combinaisonjoueur = array_merge($numerojoueur, $lettresjoueur);
  return $combinaisonjoueur;
}



/**
 * debut de l'afficharge du jeux apret traitement
 */

echo "Voici le tirage au sort : <br> Les résultats sont : " . implode(', ', $tirage)."<br>";
if ($compteurIdentiques == 3) {
  echo "Vous avez 3 bonnes réponses"."<br>"." Vous avez gagné 10 €";
} else if ($compteurIdentiques == 4) {
  echo "Vous avez 4 bonnes réponses"."<br>"."Vous avez gagné 30 €";
} else if ($compteurIdentiques == 5) {
  echo "Vous avez 5 bonnes réponses"."<br>"."Vous avez gagné 100 €";
} else if ($compteurIdentiques == 6) {
  echo "Vous avez 6 bonnes réponses"."<br>"."Vous avez gagné 1000 €";
} else if ($compteurIdentiques == 7) {
  echo "Vous avez gagné 100 000 €";
} else if ($compteurIdentiques == 8) {
  echo "Bravo ! Vous êtes millionnaire !";
} else {
  echo "Vous n'avez pas gagné !";
}

 