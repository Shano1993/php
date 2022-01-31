<?php

// addslashes() ajoute des antislashs
$mot = "Aujourd'hui nous sommes le 15 janviers";
echo $mot . "<br>";

$mot = addslashes($mot);
echo addslashes($mot) . "<br>";

echo filter_var($mot, FILTER_SANITIZE_ADD_SLASHES);

// count_chars()
$mot = "Le 15 janvier, hier nous étions le 14";
$stat = count_chars($mot);
print_r($stat);

// explode() explose en ségment
$phrase = "Le 15 janvier et hier nous étions le 14";
$mots = explode(" ", $phrase);

foreach ($mots as $mot) {
    echo "Mot: $mot <br>";
}

// implode() transforme un tableau au chaîne
$tableau = ["Hello", "World", "!"];
$chaine = implode(' ', $tableau);

echo $chaine;

// lcfirst() premier caractère en minuscule
$chaine = "HELLO WORLD !";
$chaine = lcfirst($chaine);

echo $chaine;

// ucfirst() premier caractère en majuscule
$chaine = "hello world !";
$chaine = ucfirst($chaine);

echo $chaine;

// ucwords() majuscule la première lettre de tous les mots
$chaine = "hello world !";
$chaine = ucwords($chaine);

echo $chaine;

// wordwrap() césure une chaîne
$chaine = "hello world !";
$chaine = wordwrap($chaine);

echo $chaine;

// trim() supprime les espaces au début et fin de chaîne
$chaine = " hello world, cooooooooooooment ça va bien ? ";
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

$chaine = trim($chaine);
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

// ltrim() supprime les espaces au début de chaîne
$chaine = " hello world, cooooooooooooment ça va bien ? ";
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

$chaine = ltrim($chaine);
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

$chaine = "&hello world, cooooooooooooment ça va bien ? &";
$chaine = ltrim($chaine, "&");
echo $chaine . "<br>";

// rtrim() supprime les espaces en fin de chaîne
$chaine = " hello world, cooooooooooooment ça va bien ? ";
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

$chaine = rtrim($chaine);
echo "Taille de la chaîne: " . strlen($chaine) . "<br>";

$chaine = "&hello world, cooooooooooooment ça va bien ? &";
$chaine = rtrim($chaine, "&");
echo $chaine . "<br>";

// number_format() formate un nombre pour l'affichage
$number = 1234.56;
$english_format_number = number_format($number);
$nombre_format_francais = number_format($number, 2, ',', ' ');
$number = 1234.5678;
$english_format_number = number_format($number, 2, '.', '');

// str_replace() remplace toutes les occurrences dans une chaîne
$chaine = "Hello world, learing Javascript !";
echo $chaine . "<br>";
$chaine = str_replace('Javascript', 'PHP', $chaine);
echo $chaine ."<br>";

// str_ireplace() sensible à la casse
$chaine = "Hello world, learing Javascript !";
echo $chaine . "<br>";
$chaine = str_replace('hello', 'Coucou', $chaine);
echo $chaine ."<br>";

// str_pad() complète une chaîne jusqu'à une taille donnée
$texte = "mon texte";
echo str_pad($texte, 11) ."<br>";
echo str_pad($texte, 13, "*-", STR_PAD_LEFT) ."<br>";
echo str_pad($texte,14, "-", STR_PAD_BOTH) ."<br>";
echo str_pad($texte,11, "___") ."<br>";
echo str_pad($texte,3,"*") ."<br>";

// str_shuffle() mélange les caractères
$chaine = "Hello world";
$chaine = str_shuffle($chaine);
echo $chaine ."<br>";

// str_split() convertit une chaîne en tableau
$chaine = "Hello world";
$tableau = str_split($chaine);
foreach ($tableau as $item) {
    echo "$item <br>";
}

// str_word_count() compte le nombre de mots utilisés dans une chaîne
$chaine = "Hello World, I'm learing PHP !";
echo str_word_count($chaine) ."<br>";

// strip_tags() supprime les basiles HTML et PHP
$chaine = "<strong>Hello World</strong, I'm learing PHP ! <script src='appMalveillante.js'></script>";
$chaine = strip_tags($chaine);
echo $chaine ."<br>";

// str_pos() cherche la position de la prémière accurrence dans une chaîne
$chaine = "Hello World";
$position = strpos($chaine, "Word");
echo "Le mot 'World' se trouve en position: $position" ."<br>";

// str_ipos() position de la première occurrence dans une chaîne, sans tenir compte de la casse
$chaine = "Hello World";
$search = "world";

$position = stripos($chaine, $search);
if ($position !== false) {
    echo "La chaîne a bien été trouvée." ."<br>";
}

// strstr() la première occurrence dans une chaîne et retourne ce qu’il y a à gauche ou à droite en plus
$email = 'name@example.com';
$domaine = strstr($email, '@');
echo $domaine . "<br>";

$user = strstr($email, '@', true);
echo $user . "<br>";

// strlen() calcule la taille d'une chaîne
$str = "abcdefghijklmnopqrstuvwxyz";
echo strlen($str) ."<br>";

// strrpos() cherche la position de la dernière occurrence d'une sous-chaîne dans une chaîne, à partir de la fin
$str = "Hello World World";
$position = strrpos($str, "World");
if ($position !== false) {
    echo "World a été trouvé par l'arrière en position: $position" ."<br>";
}

// strrev() inverse une chaîne
echo strrev("Hello World !") ."<br>";

// strtolower() renvoie une chaîne en miniscules
$str = "Marie A un Petit Agneau, et l'aime TRès fORt.";
$str = strtolower($str);
echo $str ."<br>";

// strtoupper() renvoie une chaîne en majuscules
$str = "Marie A un Petit Agneau, et l'aime TRès fORt.";
$str = strtoupper($str);
echo $str ."<br>";

// substr() retourne un segment de chaîne
echo substr('abcdef', 1)  ."<br>";
echo substr('abcdef', 1, 3) ."<br>";
echo substr('abcdef', 0, 4) ."<br>";
echo substr('abcdef', 0, 8) ."<br>";
echo substr('abcdef', -1, 1) ."<br>";

$string = 'abcdef';
echo $string[0] ."<br>";
echo $string[3] ."<br>";
echo $string[strlen($string)-1] ."<br>";

// sprintf() retourne une chaîne formatée
$num = 5;
$location = 'bananier';
$format = 'Il y a %d singes dans le %s';
echo sprintf($format, $number, $location) ."<br>";

