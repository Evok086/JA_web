<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JA Nantes - <?php echo $title ?></title>
    <link rel="icon" href="Images/logo_JA.webp" type="image/x-icon">
</head>

<body class="bg-stone-100 dark:bg-green-950 text-black dark:text-white">
    <?php include 'header.php' ?>
    <div class="max-w-screen-2xl mx-auto mt-20">
        <?php include 'controller/' . $template . '.php' ?>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>