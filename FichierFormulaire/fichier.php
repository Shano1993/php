<?php

function getRandomName(String $regularName): string {
    $infos = pathinfo($regularName);
    try {
        $bytes = random_bytes(15);
    }
    catch (Exception $exception) {
        $bytes = openssl_random_pseudo_bytes(15);
    }
    return bin2hex($bytes) . '.' . $infos['extension'];
}

if (isset($_FILES['fichierUtilisateur']) && $_FILES['fichierUtilisateur']['error'] === 0) {
    $allowedMimeTypes = ['text/plain', 'image/jpeg', 'image/png'];
    if (in_array($_FILES['fichierUtilisateur']['type'], $allowedMimeTypes)) {
        $maxSize = 2 * 1024 * 1024;
        if ((int)$_FILES['fichierUtilisateur']['size'] <= $maxSize) {
            $tmp_name = $_FILES['fichierUtilisateur']['tmp_name'];
            $name = getRandomName($_FILES['fichierUtilisateur']['name']);
            if (!is_dir('uploads')) {
                mkdir('uploads', 0755);
            }
            move_uploaded_file($tmp_name, 'uploads/' . $name);
        }
        else {
            echo "Le poids du fichier est trop élevé, limite de 2Mo par fichier";
        }
    }
    else {
        echo "Vous avez fourni un mauvais type de fichier";
    }
}
else {
    echo "Une erreur s'est produite";
}
