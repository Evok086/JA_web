<?php $page = $_GET['page'] ?>
<?php if (!in_array($page, ['apropos', 'photo', 'planning', 'article', 'home', 'index', 'JA' ])) $page = '404' ?>      
<?php require "templates/miniData.php"; ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>JA Nantes - <?php echo $page ?></title>
        <link rel="icon" href="Images/Site/logo_JA.webp" type="image/x-icon">
    </head>

    <body class="bg-teal-950 text-white">
        <?php include 'header.php' ?>
        <?php include "pages/$page.php" ?>
        <?php include "footer.php" ?>
    </body>

</html>