<?php $page = $_GET['page'] ?>
<?php if (!in_array($page, ['apropos', 'photo', 'planning', 'article'])) $page = 'home' ?>      
<?php require "templates/miniData.php"; ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>JA Nantes - <?php echo $page ?></title>
        <link rel="icon" href="Images/Site/Pathfinder_Logo-Flat.svg" type="image/x-icon">
    </head>

    <body>
        <?php include 'header.php' ?>
        <?php include "pages/$page.php" ?>
    </body>

</html>