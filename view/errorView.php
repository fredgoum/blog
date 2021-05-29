<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<!-- Error Message -->
<h2>Erreur</h2>

<?php $content = ob_get_clean(); ?>

<?php require('frontend/template.php'); ?>
