<?php

// __DIR__ contient le nom du dossier dans lequel est le fichier

// __FILE__ contient le chemin complet et le nom du fichier

// __CLASS__ contient le nom de la classe actuellement définie

// ClassName::class contient le nom entièrement qualifié de la classe

echo basename(__DIR__) . "<br>";
echo basename(__FILE__) . "<br>";
echo maClasse::class . "<br>";
