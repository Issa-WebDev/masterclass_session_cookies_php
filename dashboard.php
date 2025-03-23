<?php
session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} elseif (isset($_COOKIE["remember_me"])) {
    $username = htmlspecialchars($_COOKIE["remember_me"]);
    $_SESSION["username"] = $username;
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <h1>Bienvenue, <?php echo $username; ?> !</h1>
        <p>Vous êtes connecté au tableau de bord.</p>

        <form method="POST" action="logout.php">
            <button type="submit" class="logout-button">Déconnexion</button>
        </form>
    </div>
</body>
</html>