<?php
function checkUserAccess($requiredRole)
{
    if (!isset($_SESSION['user'])) {
        header("Location: /hurtownia");
        exit;
    }

    if ($_SESSION['user']['rola'] !== $requiredRole) {
        http_response_code(403);
        echo "403 - Brak dostępu";
        exit;
    }
}
