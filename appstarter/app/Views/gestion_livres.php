<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un livre</title>
</head>
<body>
    <h2>Ajouter un Livre</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <p style="color:green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <?php if(isset($validation)): ?>
        <div style="color:red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/livre/enregistrer') ?>" method="post">
        <label for="code_catalogue">Code catalogue:</label><br>
        <input type="text" name="code_catalogue"><br><br>

        <label for="titre_livre">Titre:</label><br>
        <input type="text" name="titre_livre"><br><br>

        <label for="theme_livre">Thème:</label><br>
        <input type="text" name="theme_livre"><br><br>

        <label for="id_auteur">ID Auteur:</label><br>
        <input type="text" name="id_auteur"><br><br>

        <label for="nom_auteur">Nom Auteur:</label><br>
        <input type="text" name="nom_auteur"><br><br>

        <label for="cote_exemplaire">Côte Exemplaire:</label><br>
        <input type="text" name="cote_exemplaire"><br><br>

        <label for="nom_editeur">Nom Editeur:</label><br>
        <input type="text" name="nom_editeur"><br><br>

        <label for="code_usure">Code Usure:</label><br>
        <input type="number" name="code_usure"><br><br>

        <label for="date_acquisition">Date acquisition:</label><br>
        <input type="date" name="date_acquisition"><br><br>

        <label for="emplacement_rayon">Emplacement Rayon:</label><br>
        <input type="text" name="emplacement_rayon"><br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
<?php
// require_once("header.php");
require_once(APPPATH.'Views/templates/footer.php');
?>
</html>