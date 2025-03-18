<?php
session_start();

function createSession($name, $data)
{
    $_SESSION[$name] = $data;
}

function checkIfSession($name)
{
    if (isset($_SESSION[$name])) {
        return true;
    } else {
        return false;
    }
}

function destroySession()
{
    session_unset();
}
