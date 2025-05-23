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
    <title>gestion_emprunts</title>
</head>

<body>
<form method="POST" action="/gestion_emprunts">
<p><form method="POST" action="/login" class="inscription">
        
        <label for="text">Matricule abonné </label>
        <p></p>
        <input id="maticule" name="matricule" type="text" />
        <p></p>
        <label for="text">Exemplaire dispo </label>
        <p></p>
        <input id="dispo" name="dispo" type="text" />
        <p></p>
        <label for="date">Date du jour </label>
        <p></p>
        <input id="datedujour" name="datedujour" type="date" />
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