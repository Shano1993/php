<?php

// If
$a = 2;
$b = "Hello";

if ($a = 2) {
    echo "Hello World";
}
if ($b = "Hello") {
    echo "B contient bien la chaîne Hello !";
}

// If ... Else
$a = 2;
$b = 3;

if ($a === 2 && $b === 3) {
    echo "A et B sont OK";
}
else {
    echo "A et B ne sont pas OK";
}

// If ... Elseif ... Else
$a = 2;
$b = 3;

if ($a === 2 && $b === 3) {
    echo "A et B sont OK";
}
elseif ($a > 2) {
    echo "A est plus grand que 2";
}
else {
    echo "Dans tous les autres cas !";
}

// False au lieu de true
$a = 2;

if ($a <= 2) {
    echo "A est bien égal à 2";
}

$a =4;

if (($a <= 2) === false) {
    echo "$a n'est pas plus petit ou égal à 2";
}

if (!($a <= 2)) {
    echo "$a n'est pas plus petit ou égal à 2";
}

// Ternaire
$result = $a === 2 ? "C'est vrai" : "C'est faux";

// Coalescing
$result = null;
$result = $result ?? "C'est null";
$result ??= "C'est null";
