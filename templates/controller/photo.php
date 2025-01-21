<?php $annee=$_GET['annee'] ?? 2024; ?>
<?php $photoParPage=2; ?>
<?php $pagination=$_GET['pagination'] ?? 1; ?>
<?php $premierePhoto=$photoParPage*($pagination-1)+1 ?>
<?php $premierePhoto=$photoParPage*$pagination ?>
<div class="  ">
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
    <div id="dropdown" class="absolute rounded-lg z-10 hidden bg-amber-700 divide-y divide-gray-100 rounded-lg 
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
           //?php if $pagination= ?>
                <img class="" src="/Images/Photos/<?php echo $annee?>/<?php echo $photo ?>" />
            <?php endforeach; ?>
              <?php $dernierePagination=ceil($compteur/$photoParPage); ?>
          </div>
    <div >
      <?php include 'templates/pagination.php'; ?>
</div>
</div>