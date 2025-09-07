<form method='POST' enctype="multipart/form-data" class="space-y-12 pt-5 m-8">
    <div class="mt-10 flex flex-col gap-4">
        <?php $data = $article;
        include($GLOBALS["templateRoot"].'/admin/article.php'); ?>
        <div class='text-right'>
            <?php $button = 'Valider l’article';
            include($GLOBALS["templateRoot"].'/composants/button.php'); ?>
        </div>
    </div>
</form>