<div class="p-5 gap-5 flex flex-col md:flex-row w-full">
    <?php foreach ($articles as $article): ?>
        <?php $data = $article;
        include('templates/partial/mini.php'); ?>
    <?php endforeach; ?>
</div>