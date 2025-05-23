<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/styles.css" rel="stylesheet" />
    <title>gestion_livres</title>
</head>

<body>
<form method="POST" action="/gestion_livres">
<p><form method="POST" action="/login" class="inscription">
        
        <label for="number">Code catalogue </label>
        <p></p>
        <input id="catalogue" name="catalogue" type="number" />
        <p></p>
        <label for="text">Titre du livre </label>
        <p></p>
        <input id="titre" name="titre" type="text" />
        <p></p>
        <label for="text">Theme du livre </label>
        <p></p>
        <input id="theme" name="theme" type="text" />
        <p></p>
        <button type="submit">Enregistrer</button>
        
    </div>   
    </form> 
    
les consulter et création de la base de donnée</p>
</body>
<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/footer.php');
?>
</html>