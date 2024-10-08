<?php
//com1 : utiliser pour commenté une ligne

/* com2 : permet de mettre les commentaires sur plusieurs lignes
azertgyhjkljfdsdf
zsdfghjkdsdfghjk;l
zsdfrgthjdf
*/

/**
 * com3 : utiliser pour les fonction
 */


/**
 * Parti 1: les entiers : int
 *  */ 

$var1 = 12;
$var2 = 4;

$var3 = $var1 + $var2;

//$var3 = $var3 + 10; ou $var3 += 11;
$var3 = $var3 + 10;

$var3 += 11;


/**
 * Partie2 : les chaines de caractères
 */

// . Concatenation
// " " est utiliser pour un afficharge avec variable
// ' ' est utiliser pour un afficharge simple sans interprétation 
$var3 = 'toto:';
$var4 = 'ca va?';
//$var3 = $var3 . 'lala';
$var3 .= 'lala';
echo $var3;

/**
 * Partie3: les tabelaux
 * array() ou [] permet d'initialiser un tabelau
 */
$var5 = array();
$var5 = [];

//tableau simple

$table1 = [];
$table1[1] = 'anana';
$table1[2] = 14;
$table1[3] = 12.5;
$table1[4] = 'toto';
$table1[5] = 'lala';
$table1[6] = 20;
//ou
$table1 = ['nanana', 14, 12.5, 'toto', 'lala', 20];
//var_dump($table1); permet d'afficher un tableau

$table1[2] = 'lalala';
var_dump($table1);




