<?php

// file_get_contents() récupère la totalité du contenu d’un fichier et nous le retourne sous forme de chaîne de caractères, retourne false si erreur
$contents = file_get_contents('lorem.txt');
if ($contents !== false) {
    echo $contents;
}

// file() retourne un tableau contenant chaque ligne du fichier dans l’ordre d’apparition
if (file_exists('lorem.txt')) {
    $contents = file('lorem.txt');
    print_r($contents);
    echo "<br>";
}

// readfile() lit un fichier et affiche directement le résultat sans echo
if (file_exists('lorem.txt')) {
    readfile('lorem.txt');
    echo "<br>";
}

// fread() prend la ressource renvoyée par fopen() en paramètre et lit le nombre d’octets demandé
$file = fopen('lorem.txt', 'rb');
$size = filesize('lorem.txt');
echo fread($file, $size) . "<br>";
fclose($file);

// fgets() lire un fichier ligne par ligne en renvoyant à chaque fois une nouvelle ligne sous forme de chaîne de caractères
$file = fopen('lorem.txt', 'rb');
echo fgets($file) ."<br>";
fclose($file);

// fgetc() lire un fichier caractère par caractère
$file = fopen('lorem.txt', 'rb');
$first = fgetc($file);
echo $first . "<br>";
fclose($file);

// file_put_contents() écrit du contenu dans un fichier, si le fichier n’existe pas, il sera créé
$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
file_put_contents('monFichier.txt', $content);

// rename() renommer un fichier
$file = 'monFichier.txt';
$result = rename('monFichier.txt', 'monNouveauFichier.txt');
if ($result) {
    echo "Renommé avec succés <br>";
}
else {
    echo "Impossible de renommer ce fichier <br>";
}

// unlink() supprime un fichier
$file = 'monNouveauFichier.txt';
unlink($file);

// rmdir() supprime un dossier
$directory = 'js';
rmdir($directory);

// is_readable() détermine si un fichier peut être lu
$file = 'monNouveauFichier.txt';
if (is_readable($file)) {
    echo "Fichier accessible à la lecture <br>";
}

// is_writeable() détermine si un fichier peut être écrit
$file = 'monNouveauFichier.txt';
if (is_writeable($file)) {
    echo "Fichier accessible en écriture <br>";
}

// copy() copie un fichier
$file = 'monFichier.txt';
$fileCopy = 'copieMonFichier.txt';
$result = copy($file, $fileCopy);

if ($result) {
    echo "La copie a réussi <br>";
}
else {
    echo "La copie a échouée <br>";
}

// dirname() chemin du dossier parent
$file = './monFichier.txt';
echo dirname($file) . "<br>";
echo __FILE__ . "<br>";

// is_dir() retourne TRUE si le fichier est un répertoire
if (is_dir('./js')) {
    echo "Mon dossier 'js' est bien un dossier" . "<br>";
}
else {
    echo "Le répertoire n'existe pas" . "<br>";
}

// is_file() retourne TRUE si le fichier est un dossier
if (is_file('.js/forms.js')) {
    echo "Mon fichier forms.js dans le dossier 'js' existe bien et est bien un fichier." . "<br>";
}
else {
    echo "Le dossier n'existe pas" . "<br>";
}

// pathinfo() retourne des informations sur un chemin système
$file = '.js/forms.js';
if (file_exists($file)) {
    $infos = pathinfo($file);
    echo $infos['dirname'] . "<br>";
    echo $infos['basename'] . "<br>";
    echo $infos['extension'] . "<br>";
    echo $infos['filename'] . "<br>";
}
