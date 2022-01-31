<?php

setcookie('theme', 'dark');

// expires
setcookie('theme', 'dark', time() + 3600);

// path
setcookie('theme', 'dark', time() + 3600, '/');

// domain
setcookie('theme', 'dark', time() + 3600, '/', 'localhost');

// secure
setcookie('theme', 'dark', time() + 3600, '/', 'localhost', true);

// httponly
setcookie('theme', 'dark', time() + 3600, '/', 'localhost', true, true);

foreach ($_COOKIE as $cookieName => $cookieValue) {
    echo "$cookieName => $cookieValue <br>";
}

echo $_COOKIE['theme'] . "<br>";
echo $_COOKIE['username'];

// supprimer un cookie
setcookie('theme', 'dark', time() - 3600, '/', 'localhost', true);
$newTheme = $_COOKIE['theme'] . "<br>";

echo $newTheme . "<br>";