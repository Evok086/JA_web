
 <nav class="text-center"  aria-label="Page navigation example">
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