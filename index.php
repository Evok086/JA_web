
<?php
    if (preg_match('/\.(?:png|jpg|jpeg|gif|webp)$/', $_SERVER["REQUEST_URI"])) {
        return false;    // serve the requested resource as-is.
    }
    $params = explode('?', $_SERVER['REQUEST_URI']);
    $path = explode('/', $params[0]);
    $page = $path[1] ?? 'home';
    if (!in_array($page, ['apropos', 'planning', 'article', 'home', 'index', 'JA' ])) $page = '404';
    require "templates/miniData.php";
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>JA Nantes - <?php echo $page ?></title>
        <link rel="icon" href="Images/Site/logo_JA.webp" type="image/x-icon">
    </head>

    <body class="bg-stone-100 dark:bg-green-950 text-black dark:text-white">
        <?php include 'header.php' ?>
        <div class="max-w-screen-2xl mx-auto mt-20">
            <?php include "pages/$page.php" ?>
        </div>
        <?php include "footer.php" ?>
    </body>

</html>