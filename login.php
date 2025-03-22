<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
	$password = $_POST["password"];
	
    if ($username === "admin" && $password === "kiss10") {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        setcookie("remember_me", $username, time() + (86400 * 7));

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Vos informations sont incorrect.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>