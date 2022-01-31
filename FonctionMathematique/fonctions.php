<?php

// abs() valeur absolue
$number = -4.5;
echo abs($number) . "<br>";

// ceil() arrondit au nombre supérieur
$number = 1.45;
echo ceil($number) . "<br>";

// floor() arrondit à l'entier inférieur
echo floor($number) . "<br>";

// is_nan() indique si la valeur n'est pas un nombre
if (!is_nan($number)) {
    echo "C'est bien un nombre" . "<br>";
}
else {
    echo "Ce n'est pas un nombre" . "<br>";
}

// max() valeur max

// min() valeur min

// pi() retourn la valeur pi
$pi = pi();
echo $pi . "<br>";

// pow() expression exponentielle

// round() arrondit un nombre à virgule flottante
echo round($number) . "<br>";

// rand() nombre aléatoire
$random = rand();
echo "Mon nombre aléatoire est: $random" . "<br>";

$random = rand(50, 100);
echo "Mon nombre aléatoire est: $random" . "<br>";
