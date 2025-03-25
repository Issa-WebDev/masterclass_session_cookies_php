<?php
session_start();

$error = "";
$admin = "admin";
$correct_password = "ffff";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST["password"]));

    if ($username === $admin && $password === $correct_password) {
        // creation de clé dans la session
        $_SESSION["username"] = $username;

        if (isset($_POST['remember_me'])) {
            setcookie("remember_me", $username, time() + (3600 * 24 * 7));
        }

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="username" id="username" placeholder="Entrez votre nom d'utilisateur" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>

            <div class="checkbox-container">
                <input type="checkbox" name="remember_me" id="remember_me" value="1">
                <label for="remember_me">Se souvenir de moi</label>
            </div>

            <button type="submit" name="submit" value="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>