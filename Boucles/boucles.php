<?php

// Boucle while
$i = 0;
while ($i < 5) {
    echo "La variable i vaut $i <br>";
    $i++;
}

// Boucle do ... while
$i = 0;
do {
    echo "La variable i vaut $i <br>";
    $i++;
}
while($i < 5);

// Boucle for
for ($i = 0; $i < 5; $i++) {
    echo "La variable i vaut $i <br>";
}

// Boucle foreach
$array1 = [1, 2, 3, 4, 5];

foreach ($array1 as $item) {
    echo "Dans ce tableau, j'ai trouvé la valeur $item";
}

for ($i = 0; $i < count($array1); $i++) {
    echo "J'ai trouvé la valeur " . $array1[$i];
}