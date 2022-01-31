<?php

// Function
function helloWorld() {
    echo "Hello World" . "<br>";
}

helloWorld();

// Function stockée
$helloWorld = function () {
    echo "Hello World" . "<br>";
};

$helloWorld;

// Function avec paramètres
function nomPrenom($nom, $prenom) {
    echo "Hello $nom $prenom";
}

nomPrenom("Hanotiau", "Stefan");

// Function avec un tableau
function tab($monArray) {
    if (is_array($monArray)) {
        foreach ($monArray as $item) {
            echo "<span>$item</span>";
        }
    }
}

tab([1, 2, 3, 4, 5]);

// Function avec booléen
function bool($monBooleen) {
    if (is_bool($monBooleen)) {
        echo "<p>C'est bien un booléen</p>";
    }
}

bool(true);

// Function avec un flottant

function float($monFloat) {
    if (is_float($monFloat)) {
        echo "<p>C'est bien un flottant</p>";
    }
}

float(1.55);

// Callable
function call($monCallable) {
    if (is_callable($monCallable)) {
        $monCallable();
    }
}

call("Hello World");

// Function retour
function ret($nom) {
    return ucfirst($nom);
}

$result = ret('Hanotiau');
echo $result;

// Function paramètre variable
function paramVariable(...$mesParametres) {
    foreach ($mesParametres as $parametre) {
        echo "Paramètre fourni: $parametre";
    }
}

paramVariable("Un", "Deux", "Trois", "Quatre");