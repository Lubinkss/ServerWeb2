<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations de requête</title>
</head>
<body>
    <ul>
        <li><b>Méthode</b>: <?= $_SERVER['REQUEST_METHOD'] ?></li>
        <li><b>Ressource</b> <i>(URL)</i>: <?= $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?></li>
    </ul>
</body>
</html>