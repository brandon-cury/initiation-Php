<?php
//partie 2
//on va utiliser git .PHP_EOL //pour permettre l'afficharge

//1
for($a = 0; $a < 101; $a++){
    echo $a .PHP_EOL;
}

//2
$b = 0;
while($b < 101){
    echo $b .PHP_EOL;
    $b++;
}

$c = 0;
do{
    echo $c .PHP_EOL;
    $c++;
}while($c < 101);

echo 'fin';
echo rand(5, 100);
echo rand(5, 100);
for($a=0; $a < rand(5, 20); $a++){
    $table[] = rand(5, 100);
}
print_r($table);



