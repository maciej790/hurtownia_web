<?php
function redirectUserByRole($role)
{
    switch ($role) {
        case "admin":
            header("Location: /hurtownia/views/panel/admin/admin.php");
            exit;
        case "kierownik":
            header("Location: /hurtownia/views/panel/kierownik/kierownik.php");
            exit;
        case "magazynier":
            header("Location: /hurtownia/views/panel/magazynier/magazynier.php");
            exit;
        default:
            header("Location: /hurtownia");
    }
}
