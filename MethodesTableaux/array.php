<?php

// array_column() retourne les valeurs d'une colonne d'un tableau d'entrée
$records = array(
    [
        'id' => 2135,
        'first-name' => 'John',
        'last-name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first-name' => 'Sally',
        'last-name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first-name' => 'Jane',
        'last-name' => 'Jones',
    ],
);

$first_names = array_column($records, 'first_name');
print_r($first_names);
echo "<br>";

$first_names_and_id = array_column($records, 'first_name', 'id');
print_r($first_names_and_id);
echo "<br>";

// array_combine() crée un tableau avec deux tableaux
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo "<br>";

// array_key_exists() vérifie si une clé existe
$tab = [0, 2, 4, 6, 8];
if (array_key_exists(5, $tab)) {
    echo "La clé 5 existe <br>";
}
else {
    echo "La clé 5 n'existe pas <br>";
}

$tab = ["nom" => "Doe", "prenom" => "John", "age" => 42];
if (array_key_exists('prenom', $tab)) {
    echo "La clé 'prenom' existe <br>";
}

// array_key_first() récupère la première clé d'un tableau
$firstKey = array_key_first($tab);
echo $firstKey . "<br>";

// array_key_last() récupère la dernière clé d'un tableau
$lastKey = array_key_last($tab);
echo $lastKey . "<br>";

// array_keys() retourne toutes les clés ou un ensemble des clés d'un tableau
$keys = array_keys($tab);
print_r($keys);
echo "<br>";

// array_merge() fusionne plusieurs tableaux en un seul
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";

// array_map() applique une fonction sur les éléments d'un tableau
$divByTwo = function ($item) {
    if (is_nan($item)) {
        return $item;
    }
    return $item / 2;
};

$tableau = [1, 2, 3, 4, 5];
$tableauDiviseParDeux = array_map($divByTwo, $tableau);
print_r($tableauDiviseParDeux);
echo "<br>";

// array_pop() dépile un élément de la fin d'un tableau et retourne l’élément supprimé
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
echo "<br>";

// array_rand() prend une ou plusieurs clés, au hasard dans un tableau
$persos = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
$rand_key = array_rand($persos);
echo $persos[$rand_key] . "\n";

// list() assigne des variables comme si elles étaient un tableau
list($p1, $p2, $p3, $p4, $p5) = $persos;
echo "$p1 $p2 $p3 $p4 $p5 <br>";

// array_search() recherche dans un tableau la clé associée à la première valeur
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'yellow');
$key = array_search('green', $array);
if ($key !== false) {
    echo "La clé est trouvée: $key" . "<br>";
}

// array_shift() dépile un élément au début d'un tableau. Retourne l’élément supprimé
$fruit = array_shift($stack);
print_r($stack);
echo "<br>";

// array_slice() commence à partir d'une position donnée
$input = array("a", "b", "c", "d", "e");
echo array_slice($input, 2) . "<br>";
echo array_slice($input, -2, 1) . "<br>";
echo array_slice($input, 0, 3 . "<br>");

// array_unique() dédoublonner un tableau
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
echo "<br>";

// array_values() retourne toutes les valeurs d'un tableau
$result = array_values($input);
print_r($result);
echo "<br>";

// array_walk() exécute une fonction fournie par l'utilisateur sur chacun des éléments d'un tableau
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
$modification = function (&$item1, $key, $prefix) {
    $item1 = "$prefix: $item1";
};

$afficher = function ($item, $key) {
    echo "$key . $item <br>\n";
};

echo "Avant ...:<br>";
array_walk($fruits, $afficher);
array_walk($fruits, $modification, 'fruit');
echo "... après: <br>";
array_walk($fruits,$afficher);

// compact() crée un tableau à partir de variables et de leur valeur
$nom = "Doe";
$prenom = "John";
$tab = compact('nom', 'prenom');
print_r($tab);
echo "<br>";

// count() compte tous les éléments dans un tableau
$tab = [1, 2, 3, 4, 5];
$count = count($tab);
for ($i = 0; $i < $count; $i++) {
    echo $tab[$i] . "<br>";
}

// in_array() indique si une valeur appartient à un tableau
$tab1 = [1, 2, 3, 4, 5, 6, 7];
$tab2 = ["nom" => "Doe", "prenom" => "John"];
if (in_array(5, $tab1)) {
    echo "La valeur 5 est bien dans le tableau <br>";
}
if (in_array("John", $tab2)) {
    echo "La valeur John est bien dans le tableau <br>";
}

// unset() détruit une variable
$count = count($tab1);
echo "Nombre d'éléments: $count <br>";
unset($tab1[1]);
$count = count($tab1);
echo "Nombre d'éléments: $count <br>";

// array_reverse() inverse l'ordre d'un tableau
$tab1 = array_reverse($tab1);
$tab2 = array_reverse($tab2);
print_r($tab1);
echo "<br>";
print_r($tab2);
echo "<br>";

// shuffle() mélange tous les éléments du tableau
shuffle($tab1);
shuffle($tab2);
print_r($tab1);
echo "<br>";
print_r($tab2);
echo "<br>";

// sort() trie un tableau, du plus petit au plus grand
sort($tab1);
sort($tab2);
print_r($tab1);
echo "<br>";
print_r($tab2);
echo "<br>";

// rsort() trie un tableau en ordre inverse, du plus grand au plus petit
rsort($tab1);
rsort($tab2);
print_r($tab1);
echo "<br>";
print_r($tab2);
echo "<br>";

// ksort() trie un tableau associatif suivant les clés, du plus petit au plus grand
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val <br>";
}

// krsort() trie un tableau associatif en sens inverse et suivant les clés, du plus grand au plus petit
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val <br>";
}

// asort() trie un tableau associatif et conserve l'association des index, du plus petit au plus grand
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val <br>";
}

// arsort() trie un tableau associatif en ordre inverse et conserve l'association des index, du plus grand au plus petit
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val <br>";
}

// array_filter() filtre les éléments d'un tableau grâce à une fonction de rappel
$tab = [1, 2, 3, 4, 5];
$multiples = array_filter($tab, function ($item) {
    return $item % 2 === 0;
});

print_r($multiples);