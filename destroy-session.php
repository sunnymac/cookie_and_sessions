<?php
// Always remember to initialize the session,
// even before attempting to destroy it.

// Destroy all the session variables.
$_SESSION = array();

// delete the session cookie also to destroy the session
if (ini_get("session.use_cookies")) {
    $cookieParam = session_get_cookie_params();
    setcookie(session_name(), '', time() - 1000, $cookieParam["path"], $cookieParam["domain"], $cookieParam["secure"], $cookieParam["httponly"]);
}

// as a last step, destroy the session.
session_destroy();
?>