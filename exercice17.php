<?php
$names = [];
if(isset($_GET['lang']) && isset($_GET['paires'])){

$firstName = [ "de" => ["Adolf", "Franz", "Fritz", "Gunther", "Gustav", "Hans", "Heinrich",
"Lothar", "Manfred", "Rudolf", "Siegfried", "Ulrich", "Wilhelm"], "en" => ["Allan",
"Anthony", "Ashley", "Donald", "Edward", "George", "Harry", "Henry", "John", "Philip",
"Richard", "Sean", "William", "Winston"], "fr" => ["Albert", "André", "Bernard", "Charles",
"Didier", "Fabrice", "Gérard", "Joseph", "Louis", "Michel", "Pierre", "Serge", "Thierry",
"Xavier"], "it" => ["Antonio", "Alberto", "Benito", "Bruno", "Cesare", "Enzo", "Francesco",
"Guiseppe", "Paolo", "Pietro", "Raffaele", "Roberto", "Salvatore"] ];

$lastName = [ "de" => ["Bergmann", "Hartmann", "Jäger", "Kauffmann", "Maier", "Meyer",
"Müller", "Richter", "Schneider", "Schmidt", "Schulz", "Schumacher", "Strauss", "Wagner",
"Weber", "Wolff", "Zimmermann"], "en" => ["Adams", "Brown", "Clark", "Cooper", "Ford",
"Freeman", "Green", "Jackson", "Johnson", "Kent", "Mitchell", "Patton", "Robinson",
"Smith", "Walker", "Wood"], "fr" => ["Blanc", "Dubois", "Dupond", "Dupont", "Dufour",
"Durand", "Germain", "Lebrun", "Leclerc", "Lecomte", "Legrand", "Lejeune", "Lemaire",
"Maréchal", "Morel", "Renard"], "it" => ["Rossi", "Russo", "Ferrari", "Bianchi", "Romano",
"Colombo", "Ricci", "Gallo", "Conti", "Mancini", "Costa", "Giordano", "Rizzo", "Lombardi",
"Moretti", "Fellini"] ];

$lang = $_GET['lang'];
$nomb_paires = $_GET['paires'];

function firstName(array $firstName, string $code):array
{
    return $firstName[$code];
}
function lastName(array $lastName, string $code): array
{
    return $lastName[$code];
} 


function genereName(array $firstName, array $lastName, int $nomb): array
{
    $names = [];
    $names_count = 0;
    $count_firstName_db = count($firstName) - 1 ;
    $count_lastName_db = count($lastName) - 1 ;
    while($names_count < $nomb){

        $id_firstName = rand(0, $count_firstName_db);
        $firstName_db = $firstName[$id_firstName];

        $id_lastName = rand(0, $count_lastName_db);
        $lastName_db = $lastName[$id_lastName];

        $name = $firstName_db . ' ' . $lastName_db;
        if(!in_array($name, $names)){
            $names[] = $name;
            $names_count += 1;
        }

    }
    return $names;
}

//execution
$firstName_array =  firstName($firstName, $lang);
$lastName_array = lastName($lastName, $lang);
$names = genereName($firstName_array, $lastName_array, $nomb_paires);

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
    <form action="#" method="get">
        <h1>Générer des noms et prénoms aléatoires uniques</h1>
        <label for="lang">Langue</label>
        <select name="lang" id="lang">
                <option value="de">Allemand</option>
                <option value="en">Anglais</option>
                <option value="fr">Français</option>
                <option value="it">Italien</option>
        </select>
        <label for="paires">Nombre de paires</label>
        <input type="number" name="paires" id="paires">
        <input type="submit" value="Générer">
    </form>
    <table>
        <thead>
            <tr>
                <th>Nom et Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($names as $name) { ?>
                <tr>
                    <td>  <?= $name ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>