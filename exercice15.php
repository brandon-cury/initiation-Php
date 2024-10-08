<?php
if(isset($_GET['nomb']) && isset($_GET['type_value'])){
    function passWord(int $length = 25, array $type = ['majuscules', 'minuscules', 'nombres', 'specials']):string 
{
    $type_base = [
        'majuscules'=> 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'minuscules'=>'abcdefghijklmnopqrstuvwxyz',
        'nombres'=>'0123456789',
        'specials'=>'+-/=$'
    ];

    $str = random_bytes(rand(50, 150));
    $str = base64_encode($str);

    foreach($type_base as $type_base => $caract_base){
        if(!in_array($type_base, $type)){
            $str =  str_replace(str_split($caract_base), "", $str);
        }
    }

    return substr($str, 0, $length);

}

    $nomb = $_GET['nomb'];
    $type = $_GET['type_value'];
    print_r($type);
}



//exemple
//echo passWord(20, ['specials']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Générateur de mot de passe</h1>
    <form action="exercice15.php" method="post">
        <label for="nomb">Selectionner la longueur du mot de passe</label>
        <input type="number" id="nomb" name="nomb" max="100" min="2" ><br>

        <label for="maj">Majuscules</label>
        <input type="checkbox" name="type_value" id="maj" value="majuscules"><br>

        <label for="min">Minuscules</label>
        <input type="checkbox" name="type_value" id="min" value="minuscules"><br>

        <label for="nombres">Nombres</label>
        <input type="checkbox" name="type_value" id="nombres" value="nombres"><br>

        <label for="specials">Specials</label>
        <input type="checkbox" name="type_value" id="specials" value="specials"><br><br><br>

        <input type="submit" value="Envoyer">

    </form>

    <h2>Votre mot de passe est : </h2>
</body>
</html>