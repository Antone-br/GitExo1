<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<h1>Accueil</h1>

<?php
if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    echo "<p>Bienvenue, $prenom $nom !</p>";
} else {
    echo "<p>Informations manquantes.</p>";
}
?>
</body>
</html>
