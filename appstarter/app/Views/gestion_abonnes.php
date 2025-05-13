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
    <title>gestion_abonnes</title>
</head>

<body>
<form method="POST" action="/gestion_abonnes">
<p><div>
    
    <form method="POST" action="/login" class="inscription">
        
        <label for="text">Matricule abonné </label>
        <p></p>
        <input id="matricule" name="matricule" type="text" />
        <p></p>   
        <label for="text">Nom abonné  </label>
        <p></p>
        <input id="nom" name="nom" type="text" />
        <p></p>
        <label for="date">Date de naissance abonné </label>
        <p></p>
        <input id="date" name="date" type="date" />
        <p></p>
        <label for="text">Adresse abonné </label>
        <p></p>
        <input id="adresse" name="adresse" type="text" />
        <p></p>
        <label for="tel">Téléphone abonné </label>
        <p></p>
        <input id="tel" name="tel" type="tel" />
        <p></p>
        <label for="date">Date d'adhésion abonné </label>
        <p></p>
        <input id="adhesion" name="adhesion" type="date" />
        <p></p>
        <label for="text">Catégorie Sociaux-professionelle abonné </label>
        <p></p>
        <input id="csp" name="csp" type="text" />
        <p></p>
        <button type="submit">Inscrire</button>
        
    </div>   
    </form> 
    
les consulter et création de la base de donnée</p>
</body>
<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/footer.php');
?>
</html>