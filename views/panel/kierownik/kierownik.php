<?php
require_once '../../../db/DatabaseConnection.php';
require_once '../../../middleware/Sessions.php';
require_once '../../../controller/Auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Kierownik panel</h1>
    <form method="POST">
        <input type="submit" name="logout" value="Wyloguj" />
    </form>
    <?php
    if (isset($_POST['logout'])) {
        $auth = new Auth();
        $auth->logOut();
    }
    ?>
</body>

</html>