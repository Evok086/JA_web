<form method='POST' class="space-y-12 pt-5 m-8">
    <div class="mt-10 flex flex-col gap-4">
        <?php $data = $article;
        include($GLOBALS["templateRoot"].'/admin/article.php'); ?>
        <div class='text-right'>
            <?php $button = 'Ajouter l’article';
            include($globals["templateroot"].'/composants/button.php'); ?>
        </div>
    </div>
</form>