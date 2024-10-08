<?php

$countries = [
    1 => 'Belgium',
    2 => 'Spain',
    3 => 'France',
    4 => 'Germany',
    5 => 'Italy',
    6 => 'Japan',
    7 => 'Luxembourg',
    8 => 'Netherlands',
    9 => 'UK',
    10 => 'USA',
    11 => 'Algeria',
    12 => 'Cameroon',
    13 => 'Congo',
    14 => 'Morocco',
];

$roles = [
    0 => 'guest',
    1 => 'user',
    2 => 'editor',
    3 => 'admin',
    4 => 'super admin',
];

$user001 = [
    'id' => 1,
    'firstname' => 'Super',
    'lastname' => 'Admin',
    'birthdate' => 19800531,
    'roles' => [1,2,3,4],
    'country' => 1,
    'active' => true,
    'banned' => false
];
$user002 = [
    'id' => 2,
    'firstname' => 'Alan',
    'lastname' => 'Turing',
    'birthdate' => 19540607,
    'roles' => [1,2,3],
    'country' => 9,
    'active' => false,
    'banned' => false
];
$user003 = [
    'id' => 3,
    'firstname' => 'Tim',
    'lastname' => 'Berners-Lee',
    'birthdate' => 19550108,
    'roles' => [1,2,3],
    'country' => 9,
    'active' => true,
    'banned' => false
];
$user004 = [
    'id' => 4,
    'firstname' => 'Tom',
    'lastname' => 'Smith',
    'birthdate' => 19810101,
    'roles' => [2],
    'country' => 9,
    'active' => true,
    'banned' => false
];
$user005 = [
    'id' => 5,
    'firstname' => 'Michael',
    'lastname' => 'Stonebraker',
    'birthdate' => 19431011,
    'roles' => [1,2],
    'country' => 10,
    'active' => true,
    'banned' => false
];
$user006 = [
    'id' => 6,
    'firstname' => 'John',
    'lastname' => 'Doe',
    'birthdate' => 20010101,
    'roles' => [1],
    'country' => 10,
    'active' => true,
    'banned' => false
];
$user007 = [
    'id' => 7,
    'firstname' => 'James',
    'lastname' => 'Bond',
    'birthdate' => 19770707,
    'roles' => [1],
    'country' => 9,
    'active' => true,
    'banned' => false
];
$user008 = [
    'id' => 8,
    'firstname' => 'Jean',
    'lastname' => 'Dupont',
    'birthdate' => 20000101,
    'roles' => [1],
    'country' => 3,
    'active' => true,
    'banned' => false
];
$user009 = [
    'id' => 9,
    'firstname' => 'Luis',
    'lastname' => 'Sanchez',
    'birthdate' => 19910919,
    'roles' => [1],
    'country' => 2,
    'active' => true,
    'banned' => false
];
$user010 = [
    'id' => 10,
    'firstname' => 'Wernher',
    'lastname' => 'von Braun',
    'birthdate' => 19770616,
    'roles' => [1,2],
    'country' => 4,
    'active' => true,
    'banned' => false
];
$user011 = [
    'id' => 11,
    'firstname' => 'Kevin',
    'lastname' => 'Mitnick',
    'birthdate' => 19630806,
    'roles' => [3],
    'country' => 10,
    'active' => false,
    'banned' => true
];
$user012 = [
    'id' => 12,
    'firstname' => 'Tsutomu',
    'lastname' => 'Shimomura',
    'birthdate' => 19641023,
    'roles' => [1,2],
    'country' => 6,
    'active' => true,
    'banned' => false
];
//cration d'un nouveau utilisateur
$user013 = [
    'id' => 13,
    'firstname' => 'William Doni',
    'lastname' => 'Njonfang Ngaha',
    'birthdate' => 20010523,
    'roles' => [1,3],
    'country' => 12,
    'active' => true,
    'banned' => true
];
//Affichage du le nom, le prénom et le pays, en toutes lettres, de chaque utilisateur.
echo '1- Affichage de tous les utilisateur :<br>' ;
for($i=1; $i<=13; $i++){
    // Formater l'entier avec trois chiffres (exemple: 1..13 devient 001..013)
    $num = sprintf("%03d", $i); 
    //recuperer les données de l'utilisateur
    $user = ${'user' . $num};
    //afficharge
    echo 'Nom : ' . $user['lastname'] . ' ' . 'Prénom : ' . $user['firstname'] . ' Pays : ' . $countries[$user['country']] . '<br>';
}
//Afficher le nom, le prénom et l'âge des utilisateurs bannis (banned).
echo '<br> <br> 2- Affichage de tous les utilisateur bannis :<br>' ;
for($i=1; $i<=13; $i++){
    // Formater l'entier avec trois chiffres (exemple: 1..13 devient 001..013)
    $num = sprintf("%03d", $i); 
    //recuperer les données de l'utilisateur
    $user = ${'user' . $num};
    //afficharge
    if($user['banned'] == true){
        // Obtenez la date actuelle
        $dateActuelle = date('Ymd');
        // Calculez l'âge en soustrayant la date de naissance de la date actuelle
        $age = floor(($dateActuelle - $user['birthdate']) / 10000);   
        //affichage                
        echo 'Nom : ' . $user['lastname'] . ' ' . 'Prénom : ' . $user['firstname'] . ' Age : ' . $age . '<br>';
    }
    
}
// Afficher le nom et le prénom des utilisateurs actifs possédant le rôle admin.
echo '<br> <br> 3- Affichage des admin :<br>' ;
for($i=1; $i<=13; $i++){
    // Formater l'entier avec trois chiffres (exemple: 1..13 devient 001..013)
    $num = sprintf("%03d", $i); 
    //recuperer les données de l'utilisateur
    $user = ${'user' . $num};
    //on recherche la clé admin dans le tableau roles et on verifie si cette clé existe dans le tableau roles de lutilisateur
    if(in_array(array_search('admin', $roles), $user['roles'])){
        //afficharge
        echo 'Nom : ' . $user['lastname'] . ' ' . 'Prénom : ' . $user['firstname'] . '<br>';
    }
    
}
//Afficher le nombre d'utilisateurs par pays (nombre et nom du pays).
// Afficher le nom et le prénom des utilisateurs actifs possédant le rôle admin.
echo '<br> <br> 4- Affichage du nombre d\'utilisateur par pays : <br>' ;
$key_country = array_keys($countries);
// Créer un nouveau tableau avec les clés et la valeur 0 pour chaque clé
$all_users_country = array_fill_keys($key_country, 0);
for($i=1; $i<=13; $i++){
    // Formater l'entier avec trois chiffres (exemple: 1..13 devient 001..013)
    $num = sprintf("%03d", $i); 
    //recuperer les données de l'utilisateur
    $user = ${'user' . $num};
    $user['country'];
    $all_users_country[$user['country']]++;    
}
//afficharge
for($i=1; $i<=count($countries); $i++){
    echo 'Pays : ' . $countries[$i] . ' ' . 'Nombre d\'utilisateur : ' . $all_users_country[$i] . '<br>';
}
// Afficher le nom et le prénom des utilisateurs de moins de 50 ans au 1e janvier 2024.
echo '<br> <br> 5- Affichage des utilisateurs de moins de 50 ans au 1e janvier 2024 : <br>' ;
for($i=1; $i<=13; $i++){
    // Formater l'entier avec trois chiffres (exemple: 1..13 devient 001..013)
    $num = sprintf("%03d", $i); 
    //recuperer les données de l'utilisateur
    $user = ${'user' . $num};
    //afficharge
    if($user['banned'] == true){
        // Obtenez la date du 1e janvier 2024
        $dateActuelle = '20240101';
        // Calculez l'âge en soustrayant la date de naissance de la date actuelle
        $age = floor(($dateActuelle - $user['birthdate']) / 10000);
        if($age < 50){
            //affichage                
            echo 'Nom : ' . $user['lastname'] . ' ' . 'Prénom : ' . $user['firstname'] . ' Age : ' . $age . '<br>';
        }   
        
    }
}


/**
 * En utilisant et en parcourant exclusivement les données fournies ci-dessus;
 *
 * En représentant les stuctures et schémas logiques utilisés
 * et en énonçant les étapes nécessaires à la résolution du problème,
 * par écrit dans les commentaires du code, ainsi qu'oralement
 * lorsque le chargé de cours vous interroge;
 *
 * Ecrivez 1 script fonctionnel dans le langage PHP, permettant, dans l'ordre, de :
 *
 * - Ajouter un nouvel utilisateur possédant :
 *      -- votre nom (chaîne de caractères)
 *      -- votre prénom (chaîne de caractères)
 *      -- votre date de naissance (chaîne de caractères)
 *      -- les rôles "admin" et "user" (liste d'entiers, parmi la liste fournie)
 *      -- votre pays (entier, parmi la liste fournie)
 *      -- le statut "actif" (booléen)
 *      -- le statut "non banni" (booléen)
 * - Afficher le nom, le prénom et le pays, en toutes lettres, de chaque utilisateur.
 * - Afficher le nom, le prénom et l'âge des utilisateurs bannis (banned).
 * - Afficher le nom et le prénom des utilisateurs actifs possédant le rôle admin.
 * - Afficher le nombre d'utilisateurs par pays (nombre et nom du pays).
 * - Afficher le nom et le prénom des utilisateurs de moins de 50 ans au 1e janvier 2024.
 *
 */
