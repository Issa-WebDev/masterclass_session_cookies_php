<?php
session_start();

// Supprimer toutes les données de session
session_unset();
session_destroy();

// Supprimer le cookie "remember_me"
if (isset($_COOKIE["remember_me"])) {
    setcookie("remember_me", "", time() - 3600, "/");
}

header("Location: login.php");
exit();
?>