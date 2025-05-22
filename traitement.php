<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom_complet'];
    $groupe = $_POST['groupe'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $encadrant = $_POST['encadrant'];
} else {
    header("Location: formulaire.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des données</title>
</head>
<body>
<h2>Données soumises :</h2>
<p><strong>Nom et Prénom :</strong> <?= $nom ?></p>
<p><strong>Numéro de groupe :</strong> <?= $groupe ?></p>
<p><strong>Date début :</strong> <?= $date_debut ?></p>
<p><strong>Date fin :</strong> <?= $date_fin ?></p>
<p><strong>Nom de l'encadrant :</strong> <?= $encadrant ?></p>

</body>
</html>
