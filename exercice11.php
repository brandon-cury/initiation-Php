<?php
// Exercice : 
function sendMessage(string $emeteur, string $recepteur, string $message = ' votre message a bien été reçu ') : string
{
    return 'Bonjour ' . $emeteur . ', '  . "\n" . $message . "\n" . ' Bien à vous, ' . $recepteur;
}
 
//Exemple
echo nl2br(sendMessage('Brandon', 'Rolan', 'votre message a bien été reçu ce mardi') . "\n");
echo nl2br(sendMessage('Brandon', 'Rolan', 'Coucou') . "\n");
echo nl2br(sendMessage('Brandon', 'Rolan', 'Veillez confirmer votre inscription à notre site.') . "\n");






