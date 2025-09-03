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

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'admin' && $password === 'azerty') {
        header('Location: index.html');
        exit();
    } else {
        header('Location: profil.html');
        exit();
    }
} else {
    header('Location: index.html');
    exit();
}
?>
</body>
</html>
