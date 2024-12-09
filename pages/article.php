<?php $article = $_GET['article'] ?>
<?php $filename = "articles/$article/article.php" ?>
<?php if (!file_exists($filename))
    die('Erreur : article introuvable') ?>
<?php include($filename) ?>