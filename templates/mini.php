<div class="basis-1/3 rounded-lg shadow-inner bg-emerald-50 dark:bg-emerald-700 shadow-black">
    <div class="p-6">
        <div class="flex flex-row justify-between gap-4">
            <div class="flex-1 flex flex-col gap-4">
                <h5 class="text-2xl font-bold tracking-tight dark:text-white">
                    <?php echo htmlspecialchars($data->title, ENT_QUOTES, 'UTF-8'); ?>
                </h5>
                <p class=" font-normal">
                    <?php echo htmlspecialchars($data->text, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <?php if (!empty($data->link)): ?>
                    <div class="">
                        <a href="<?php echo htmlspecialchars($data->link, ENT_QUOTES, 'UTF-8'); ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-800 
                       bg-lime-400 rounded-lg hover:lime-400 focus:ring-4 focus:outline-none focus:ring-cyan-300 
                       dark:hover:lime-400 dark:focus:ring-cyan-800 shadow shadow-black">
                            <?php echo htmlspecialchars($data->linkText ?? 'Plus d\'infos', ENT_QUOTES, 'UTF-8'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="w-4 h-4 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (!empty($data->image)): ?>
                <div class="sm:mb-0 sm:ml-4 sm:order-last">
                    <div class="inline-block rounded-lg shadow shadow-black overflow-hidden">
                        <img class="fit-picture max-h-32 w-full object-contain"
                            src="<?php echo htmlspecialchars($data->image, ENT_QUOTES, 'UTF-8'); ?>"
                            alt="Image descriptive" />
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>