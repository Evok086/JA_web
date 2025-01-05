<div class="">
        <div class="p-5 gap-5 flex flex-col md:flex-row w-full">
            <?php
            $racine = $_GET['mode'] == 'inactif' ? 'articlesDesactives' : 'articles';
            $dossiers = scandir($racine);
            foreach ($dossiers as $dossier) {
                if (str_starts_with($dossier, '.')) {
                    continue;
                }
                $cheminMini = "$racine/$dossier/mini.php";
                if (file_exists($cheminMini)) {
                    include($cheminMini);
                    include('templates/mini.php');
                }
            }
            ?>
        </div>
</div>