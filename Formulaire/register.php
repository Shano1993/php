<?php

require __DIR__ . 'function.php';

if (isset($_POST['username'], $_POST['age'], $_POST['password'], $_POST['password_repeat'], $_POST['email'])) {
    $username = cleanup($_POST['username']);
    $email = cleanup($_POST['email']);
    $age = cleanup($_POST['age']);
    $password = cleanup($_POST['password']);
    $passwordRepeat = cleanup($_POST['password_repeat']);

    if (!filter_var($email, FILTER_SANITIZE_EMAIL) || $password !== $passwordRepeat || validatePassword($password)) {
        header('Location: index.php?success=0');
    }
    echo "Username: $username <br>";
    echo "Mail: $email <br>";
    echo "Age: $age <br>";
    echo "password: $password <br>";
    echo "passwordRepeat: $passwordRepeat <br>";

    header('Location: index.php?success=1');
}
else {
    header('Location: index.php?success=0');
}

