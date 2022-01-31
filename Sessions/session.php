<?php

// démarrer une session, toujours avant le code HTML

session_start();
$timesOfSession = 60 * 60 * 24;
session_set_cookie_params($timesOfSession);

$sessionId = session_id();
echo "Via la fonction session_id(): " . $sessionId . "<br>";

if (isset($_COOKIE['PHPSESSID'])) {
    echo "Via les cookies: " . $_COOKIE['PHPSESSID'];
}

$_SESSION['theme'] = 'dark';
$_SESSION['username'] = 'John Doe';

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <div>
        <?php
        echo $_SESSION['theme']. "<br>";
        echo $_SESSION['username']. "<br>";
        ?>
    </div>
</body>
</html>

<?php
$_SESSION = array();

$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 1500);

session_destroy();