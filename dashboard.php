<?php
session_start();

if (isset($_SESSION["username"])) {
    echo "Bienvenue, " . $_SESSION["username"];
} elseif (isset($_COOKIE["remember_me"])) {
    echo "Content de vous revoir, " . $_COOKIE["remember_me"];
} else { 
    header("Location: login.php");
    exit();
}
?>