<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=  $data["pageTitle"] ?> | Cours de magie</title>
        <link rel="stylesheet" href="css/global.css">
    </head>
    <body>
        <main>
            <header>
                <div class="title">Cours de magie</div>
                <ul>
                    <li><a href="index.php" <?= $data["pageTitle"] == "Accueil" ? 'class="selected"' : "" ?> >Accueil</a></li>
                    <li><a href="cours.php" <?= $data["pageTitle"] == "Cours" ? 'class="selected"' : "" ?> >Cours</a></li>
                    <li><a href="inscription.php" <?= $data["pageTitle"] == "Inscription" ? 'class="selected"' : "" ?> >Inscription</a></li>
                </ul>
            </header>
            <div class="container">
                <h1><?=  $data["pageTitle"] ?></h1>