<?php

$nombres = [
    [1, 2, 3, 9, 24],
    [0, 13, 22, 3, -1000]
];

$students = [
    "Une chaîne de caractères",
    ['prenom' => 'Pierre', 'age' => '18'],
    ['prenom' => 'Pol', 'age' => '24'],
    ['prenom' => 'Jacques', 'age' => '32'],
];

$nombres1 = $nombres[0];
$nombres2 = $nombres[1];

print_r($nombres);
echo "<br>";
print_r($nombres1);
echo "<br>";
print_r($nombres2);
echo "<br>";

echo $nombres[0][0];
echo $nombres[0][1];
echo $nombres[0][2];
echo $nombres[1][2];
echo $nombres[1][3];

foreach ($nombres as $subArray) {
    foreach ($subArray as $value) {
        echo "Valeur: $value <br>";
    }
}

foreach ($students as $student) {
    if (is_array($student)) {
        foreach ($student as $key => $value) {
            echo "Le tableau actuellement dans la boucle dispose de la clé '$key' ayant pour valeur '$value' <br>";
        }
    }
    else {
        echo "Pas de boucle car l'élément n'est pas un tableau: $students <br>";
    }
}