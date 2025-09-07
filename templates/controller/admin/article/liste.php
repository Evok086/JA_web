<div class="p-5 gap-5 flex flex-col md:flex-row w-full">
    <div class='flex'>
        <?php $button = 'Gestionnaire d\'articles';
        $href = '/admin/articles';
        include($GLOBALS["templateRoot"] . '/composants/buttonLink.php'); ?>
        <?php $button = 'Gestionnaire d\'évenements';
        $href = '/admin/evenements';
        include($GLOBALS["templateRoot"] . '/composants/buttonLink.php'); ?>
    </div>
    <?php foreach ($articles as $article): ?>
        <div class="basis-1/3 rounded-lg shadow-inner bg-emerald-50 dark:bg-emerald-700 shadow-black">
            <form method='POST' enctype="multipart/form-data" class="m-8" action="<?php echo($article->urlEditor) ?>">
                <div class="mt-10 flex flex-col gap-4">
                    <?php $data = $article;
                    include($GLOBALS["templateRoot"] . '/admin/article.php'); ?>
                    <div class='flex'>
                        <?php $button = 'Valider';
                        include($GLOBALS["templateRoot"] . '/composants/button.php'); ?>
                        <?php $button = 'Supprimer';
                        $color = 'red';
                        $formaction = $article->urlSupprimator;
                        include($GLOBALS["templateRoot"] . '/composants/button.php'); ?>
                    </div>
                </div>
            </form>
        </div>
    <?php endforeach; ?>
    <?php $button = 'Nouvel article';
    $href = '/admin/articles/nouveau';
    include($GLOBALS["templateRoot"] . '/composants/buttonLink.php'); ?>
</div>