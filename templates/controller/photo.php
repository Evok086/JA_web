<?php $annee=$_GET['annee'] ?? 2024; ?>
<?php $photoParPage=2; ?>
<?php $pagination=$_GET['pagination'] ?? 1; ?>
<div class="mt-20">
    <button id="dropdownDefaultButton" onclick="document.getElementById('dropdown').classList.toggle('hidden')"
    class="text-white m-10 bg-amber-700 hover:bg-amber-700 focus:ring-4 focus:outline-none
focus:ring-amber-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex 
items-center" type="button"><?php echo $annee; ?> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdown" class="rounded-lg z-10 hidden bg-amber-700 divide-y divide-gray-100 rounded-lg 
shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 rounded-lg dark:text-gray-200 bg-amber-700"
            aria-labelledby="dropdownDefaultButton">
            <?php $scandir = scandir("/home/aetuo/Bureau/projet/JAweb/JA_web/Images/Photos"); ?>
            <?php foreach($scandir as $dossier):  ?>
              <?php if (str_starts_with($dossier,'.')){continue;} ?>
                <li>
                  <a href="/photo?annee=<?php echo $dossier;?>" class="block px-4 py-2 hover:bg-orange-600 dark:hover:bg-gray-600 dark:hover:text-white">
                      <?php echo $dossier;?>
                  </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div>
      <?php $scandir = scandir("/home/aetuo/Bureau/projet/JAweb/JA_web/Images/Photos/$annee"); ?>
            <?php $compteur=0; foreach($scandir as $photo): ?>
              <?php if (str_starts_with($photo,'.')){continue;} $compteur++; ?>
               <?php if ($compteur > $photoParPage ) {continue;} ?>
                <img class="" src="/Images/Photos/<?php echo $annee?>/<?php echo $photo ?>" />
            <?php endforeach; ?>
              <?php $dernierePagination=ceil($compteur/$photoParPage); ?>
             <?php echo $dernierePagination; ?>
          </div>
    <div class="  place-content-center">
    <nav aria-label="Page navigation example">
  <ul class="inline-flex -space-x-px text-sm">
    <?php if ($pagination>1): ?>
      <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination -1);?>" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Précédent</a>
    </li>
    <?php else:  ?>      
      <li>
      <span  class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-200 border border-e-0 border-gray-300 rounded-s-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 ">Précédent</a>
    </li>
    <?php endif; ?>
    <?php if ($pagination>2): ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination-2);?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $pagination-2; ?></a>
    </li>
    <?php endif; ?>
    <?php if ($pagination>1): ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination-1);?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $pagination-1; ?></a>
    </li>
    <?php endif; ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination);?>" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"><?php echo $pagination; ?></a>
    </li>
    <?php if ($pagination<$dernierePagination): ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination+1);?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $pagination+1; ?></a>
    </li>
    <?php endif; ?>
    <?php if ($pagination<$dernierePagination-1): ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination+2);?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $pagination+2; ?></a>
    </li>
    <?php endif; ?>
    <?php if ($pagination<$dernierePagination): ?>
    <li>
      <a href="/photo?annee=<?php echo $annee; ?>&pagination=<?php echo ($pagination +1);?>" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Suivant</a>
    </li>
    <?php else:  ?>      
      <li>
      <span  class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-gray-200 border border-e-0 border-gray-300 rounded-e-lg  dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 ">Suivant</a>
    </li>
    <?php endif ?>
  </ul>
</nav>
</div>
</div>