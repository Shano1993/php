<?php
    if (isset($_GET['success']) && intval($_GET['success']) === 1) { ?>
        <div class="success">Les données ont bien été envoyées, merci !</div> <?php
    }
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <form action="register.php" method="post">
        <div>
            <label for="id_username">Username</label>
            <input type="text" name="username" id="id_username" required minlength="5" maxlength="20">
        </div>
        <div>
            <label for="id_mail">Mail</label>
            <input type="email" name="email" id="id_email" required minlength="5" maxlength="100">
        </div>
        <div>
            <label for="id_age">Age</label>
            <input type="number" name="age" id="id_age" required min="18" max="100">
        </div>
        <div>
            <label for="id_password">Password</label>
            <input type="password" name="password" id="id_password" required minlength="5" maxlength="100">
        </div>
        <div>
            <label for="id_password_repeat">Password Repeat</label>
            <input type="password" name="password_repeat" id="id_password_repeat">
        </div>
        <div>
            <input type="submit" value="Envoyer" name="submit">
        </div>
    </form>

    <script src="app.js"></script>
</body>
</html>