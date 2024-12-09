<div class="basis-1/4 rounded-lg shadow-inner bg-teal-600">
    <div class="p-6">
        <div class="flex flex-col sm:flex-row justify-between gap-4">
            <div class="flex-1">
                <a href="<?php echo $data->link ?>">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <?php echo htmlspecialchars($data->title, ENT_QUOTES, 'UTF-8'); ?>
                    </h5>
                </a>
                <p class=" font-normal text-teal-950">
                    <?php echo htmlspecialchars($data->text, ENT_QUOTES, 'UTF-8'); ?>
                </p>
            </div>
            <?php if (!empty($data->image)): ?>
                <div class="sm:mb-0 sm:ml-4 sm:order-last">
                    <img class="fit-picture max-h-32 w-full object-contain rounded-lg"
                        src="<?php echo htmlspecialchars($data->image, ENT_QUOTES, 'UTF-8'); ?>" alt="Image descriptive" />
                </div>
            <?php endif; ?>
            <?php if (!empty($data->link)): ?>
                <div class="">
                    <a href="<?php echo htmlspecialchars($data->link, ENT_QUOTES, 'UTF-8'); ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white 
                       bg-teal-950 rounded-lg hover:teal-950 focus:ring-4 focus:outline-none focus:ring-orange-300 
                       dark:hover:teal-950 dark:focus:ring-orange-800">
                        <?php echo htmlspecialchars($data->linkText ?? 'Plus d\'infos', ENT_QUOTES, 'UTF-8'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>