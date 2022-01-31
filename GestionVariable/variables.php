<?php

// boolval() récupère la valeur booléenne d'une variable
function displayBoolVal($value) {
    $booleanValue = boolVal($value);
    $print = 'false';
    if ($booleanValue) {
        $print = 'true';
    }
    return "$value => $print <br>";
}

echo displayBoolVal(0) . "<br>";
echo displayBoolVal(4.2) . "<br>";
echo displayBoolVal("0") . "<br>";
echo displayBoolVal(1, 2) . "<br>";
echo displayBoolVal([]) . "<br>";

// empty() détermine si une variable est vide

$var1 = "Bonjour";
if (empty($var1)) {
    echo '$var1 contient "Bonjour"' . "<br>";
}
if (empty($var2)) {
    echo '$var2 vaut soit 0, vide, ou pas définie' . "<br>";
}

// floatval() convertit une chaîne en nombre à virgule flottante
$var = '1154.1515Test';
$float = floatval($var);
echo $float ."<br>";

$var = 'Test1154.1515';
$float = floatval($var);
echo $float ."<br>";

// intval() retourne la valeur numérique entière équivalente d'une variable
echo intval(42) ."<br>";
echo intval(4.2) ."<br>";
echo intval('42') ."<br>";
echo intval(042) ."<br>";
echo intval([]) ."<br>";
echo intval(false ."<br>");

// is_array() détermine si une variable est un tableau
$tab = [1, 2, 3, 4, 5];
$string = "Ma chaîne de caractères";
if (is_array($tab)) {
    echo "tab est bien un tableau" . "<br>";
}
if (is_array($string)) {
    echo "String est un tableau" . "<br>";
}

// is_bool() détermine si une variable est un booléen
$a = false;
$b = 0;
if (is_bool($a) === true) {
    echo "Oui c'est un booléen" . "<br>";
}
if (is_bool($b) === false) {
    echo "Non ce n'est pas un booléen" . "<br>";
}

// is_float() détermine si une variable est de type nombre décimal
var_dump(is_float(27.5)) . "<br>";
var_dump(is_float(23)) . "<br>";
var_dump(is_float('abc')) . "<br>";
var_dump(is_float(true)) . "<br>";

// is_int() détermine si une variable est de type nombre entier
var_dump(is_int(27.5)) . "<br>";
var_dump(is_int(23)) . "<br>";
var_dump(is_int('abc')) . "<br>";
var_dump(is_int(true)) . "<br>";

// is_null() indique si une variable vaut null
$var = null;
if (is_null($var)) {
    echo "La variable est null" . "<br>";
}
if ($var === null) {
    echo "La variable est null" . "<br>";
}

// is_numeric() détermine si une variable est un nombre ou une chaîne numérique
function returnIsNumeric($var) {
    if (is_numeric($var)) {
        return "true <br>";
    }
    else {
        return "False <br>";
    }
}

echo returnIsNumeric(25);
echo returnIsNumeric("25");
echo returnIsNumeric([1, 2]);

// is_string() détermine si une variable est de type chaîne de caractères
function returnIsString($var) {
    if (is_string($var)) {
        return "true <br>";
    }
    else {
        return "False <br>";
    }
}

echo returnIsString(25);
echo returnIsString("25");
echo returnIsString([1, 2]);

// isset() détermine si une variable est déclarée et est différente de null
$a = 'test';
$b = 'anothertest';

var_dump(isset($a)) . "<br>";
var_dump(isset($a, $b)) . "<br>";
unset($a);

var_dump(isset($a)) . "<br>";
var_dump(isset($a, $b)) . "<br>";

$foo = NULL;
var_dump(isset($foo)) . "<br>";

// print_r() affiche des informations lisibles pour une variable
$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
$string = "Une chaîne de caractères";
print_r($a) . "<br>";
print_r($string) . "<br>";

// unset() détruit une variable
unset($a);
unset($string);

// var_dump() affiche les informations d'une variable
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

