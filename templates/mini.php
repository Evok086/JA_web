<div class="basis-1/4">
    <div class="p-6 bg-white
        border border-gray-200 rounded-lg shadow dark:bg-gray-800 
        dark:border-gray-700">
        <div class="flex flex-col sm:flex-row justify-between gap-4">
            <div>
                <a href="<?php echo $data->link ?>">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 
        dark:text-white"><?php echo $data->title ?></h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <?php echo $data->text ?>
                </p>
                <?php if ($data->image): ?>
                    <div class="mb-4 inset-y-0 right-0 sm:">
                        <img class="fit-picture max-h-32"
                            src="<?php echo $data->image ?>" />
                    </div>
                <?php endif; ?>
                <?php if ($data->link): ?>
                    <a href="<?php echo $data->link ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center 
                text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-yellow-600 dark:hover:bg-orange-700 
                dark:focus:ring-orange-800">
                        <?php echo $data->linkText ?? 'Plus d\'infos' ?>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>