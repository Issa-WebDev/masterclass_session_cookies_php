<?php
session_start();

// Initialise les variables de session
if (!isset($_SESSION["username"])) {
    $_SESSION["username"] = "admin";
    $_SESSION["password"] = "kiss10";
}

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Supprime les variables spécifiques de la session
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);

    // Détruit complètement la session
    session_destroy();

    // Redirige pour éviter une soumission répétée du formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de destruction de session</title>
</head>
<body>
    <h1>Contenu de la session :</h1>
    <pre>
        <?php
        if (isset($_SESSION)) {
            var_dump($_SESSION);
        } else {
            echo "La session a été détruite.";
        }
        ?>
    </pre>

    <form method="POST">
        <button type="submit">Supprimer la session</button>
    </form>
</body>
</html>