<?php
require_once './db/DatabaseConnection.php';
require_once './middleware/Sessions.php';
require_once  './controller/Auth.php';
require_once './middleware/roleRedirect.php';

if (isset($_SESSION['user'])) {
    redirectUserByRole($_SESSION['user']['rola']);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login page</h1>
    <form action="" method="post">
        <input type="text" placeholder="login" name="login">
        <input type="text" placeholder="password" name="password">
        <input type="submit" value="zaloguj" name="submit">
    </form>
    <?php

    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $auth = new Auth();
        print_r($auth->auth($login, $password));
    }
    ?>
</body>

</html>