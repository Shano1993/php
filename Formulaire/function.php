<?php

/**
 * @param $data
 * @param null $min
 * @param null $max
 * @return string
 */
function cleanup($data, $min=null, $max=null): string {
    $data = trim($data);
    $data = strip_tags($data);
    if ($min !== null || $max !== null) {
        $data = intval($data);
        if ($data < 18 || $data > 120) {
            $data = 18;
        }
    }
    return $data;
}

/**
 * @param $password
 * @return bool
 */
function validatePassword($password): bool {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $strlen = strlen($password) >= 5 || strlen($password) <= 100;

    if ($uppercase && $lowercase && $number && $specialChars && $strlen) {
        return true;
    }
    return false;
}


