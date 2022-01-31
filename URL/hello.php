<?php

print_r($_GET);

foreach ($_GET as $param => $value) {
    echo "Paramètre <strong>$param</strong> contient <strong>$value</strong> <br>";
}

echo $_GET["nom"] . "<br>";
echo $_GET["prenom"] . "<br>";
echo $_GET["age"] . "<br>";

if (isset($_GET["nom"])) {
    $valeur = $_GET["nom"];
    echo "La clé <strong>'nom'</strong> est bien présente et elle contient la valeur: $valeur <br>";
}
if (isset($_GET["prenom"])) {
    $valeur = $_GET["prenom"];
    echo "La clé <strong>'prenom'</strong> est bien présente et elle contient la valeur: $valeur <br>";
}
if (isset($_GET["age"])) {
    $valeur = $_GET["age"];
    echo "La clé <strong>'age'</strong> est bien présente et elle contient la valeur: $valeur <br>";
}

if (isset($_GET["nom"], $_GET["prenom"], $_GET["age"])) {
    echo "Toutes les variables existent, je peux continer" . "<br>";
}

if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["age"])) {
    for($i = 0; $i < $_GET["age"]; $i++) {
        echo "Hello " . $_GET["nom"] . " " . $_GET["prenom"] . "<br>";
    }
}