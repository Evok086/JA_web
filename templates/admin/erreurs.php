<div class="text-red-500">
<?php if (isset($rapport[$champ])): ?>
    <?php foreach ($rapport[$champ] as $message): ?>
        <?php echo $message; ?>
    <?php endforeach; ?>
<?php endif; ?>
</div>