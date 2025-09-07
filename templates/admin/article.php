<div class="">
    <label for="title" class="block font-medium">Titre</label>
    <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($article?->title) ?>"
           class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
    <?php $champ = 'title';
    include($GLOBALS["templateRoot"].'/admin/erreurs.php'); ?>
</div>

<div class="">
    <label for="description" class="block font-medium">Description (HTML)</label>
    <textarea name="description" id="description"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?php echo htmlspecialchars($article?->text) ?></textarea>
    <?php $champ = 'text';
    include($GLOBALS["templateRoot"].'/admin/erreurs.php'); ?>
</div>

<div class="">
    <label for="lien" class="block font-medium">Lien</label>
    <input type="text" name="lien" id="lien" value="<?php echo htmlspecialchars($article?->link) ?>"
           class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
    <?php $champ = 'link';
    include($GLOBALS["templateRoot"].'/admin/erreurs.php'); ?>
</div>

<div class="col-span-full">
    <label for="image" class="block font-medium">Image</label>
    <div class="flex justify-center rounded-lg border border-dashed border-white px-6 py-10">
        <div class="text-center">
            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                 aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd"
                      d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                      clip-rule="evenodd"/>
            </svg>
            <div class="mt-4 flex text-sm/6">
                <label for="file-upload"
                       class="relative cursor-pointer rounded-md font-semibold">
                    <input id="image" name="image" type="file"/>
                    <?php $champ = 'image';
                    include($GLOBALS["templateRoot"].'/admin/erreurs.php'); ?>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="flex gap-3">
    <input id="page" aria-describedby="comments-description" name="page" type="checkbox" checked class="">
    <label for="page" class="font-medium">Page</label>
</div>

<div class="">
    <label for="page_title" class="block font-medium">Titre</label>
    <input type="text" name="page_title" id="page_title"
           class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
</div>

<div class="">
    <label for="contenu" class="block font-medium">Contenu (HTML)</label>
    <textarea name="contenu" id="contenu"
              class=" block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
      </textarea>
</div>