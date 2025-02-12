<button type="submit"
<?php if (isset($formaction)):?>
        formaction="<?php echo $formaction?>"
<?php endif;?>
        class="text-white
<?php if ($color === 'red'): ?>
        bg-red-700 hover:bg-red-800 dark:bg-red-600 dark:hover:bg-red-700
        focus:outline-none dark:focus:ring-red-800 focus:ring-red-300
<?php else: ?>
        bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700
        focus:outline-none dark:focus:ring-blue-800 focus:ring-blue-300
<?php endif; ?>
        focus:ring-4
        font-medium rounded-lg
        text-sm px-5 py-2.5 me-2 mb-2">
    <?php echo $button; ?>
</button>