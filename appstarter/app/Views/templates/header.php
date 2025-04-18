<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link href="assets/styles.css" rel="stylesheet">
    <title>Bibliothèque Nationale de la BPAR</title>
    <link rel="icon" type="image/png" href="logoBPAR.jpg"/>
    <?php if (isset($loggIn) && $loggIn == true ) : ?>
        <span>Bonjour,<?=esc($name) ?> </span>
    <?php endif ?> 
</head>

<body>
    <header class="header-outer">
    <table class="headerDePage">
        <thead>
            <tr>
            <th scope="col" class="logoHeader"></th>
            <th scope="col">Accueil</th>
            <th scope="col">Nos livres</th>
            <th scope="col"><a href="aboutus">Qui sommes-nous?</a></th>
            <th scope="col"><a href="login">Mon compte</a></th>
            </tr>
        </thead>
    </table>


    </header>