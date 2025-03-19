<?php
require_once __DIR__ . '/../../../db/DatabaseConnection.php';
require_once __DIR__ . '/../../../middleware/Sessions.php';
require_once __DIR__ . '/../../../controller/Auth.php';
require_once __DIR__ . '/../../../middleware/preventUrl.php';

checkUserAccess('admin');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Admin panel</h1>
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