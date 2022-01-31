<?php

$student = ["firstname" => "Pol", "pseudo" => "Popol", "age" => 42, "profile" => "fullstack"];
$student["firstname"] = "Pol-émique";
$student["pseudo"] = "DotLength";
$student["age"] = 24;
$student["profile"] = "back";

echo $student["firstname"] . "<br>";
echo $student["pseudo"] . "<br>";

foreach ($student as $key => $value) {
    echo "La clé $key contient la valeur $value <br>";
}

foreach ($student as $value) {
    echo "Student contient la valeur $value <br>";
}

foreach (array_keys($student) as $key) {
    echo "Student contient la $key <br>";
}
