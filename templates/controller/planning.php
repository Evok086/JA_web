<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-3">
    <table class="w-full text-sm text-left rtl:text-right border-separate md:border-spacing-x-1 border-spacing-y-2">
        <caption class="text-lg p-2">Planning Décembre - Janvier</caption>
        <thead>
            <tr class="">
                <th class="p-1">Date</th>
                <th class="p-1">Objet</th>
                <th class="p-1">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evenements as $evenement):?>
            <tr class="bg-white bg-opacity-25">
                <td class="p-1"><?php echo $evenement->date->format('Y-m-d') ?></td>
                <td class="p-1"><?php echo $evenement->title ?></td>
                <td class="p-1">
                <?php if ($evenement->link): ?>
                    <a href="<?php echo $evenement->link ?>"><?php echo $evenement->description ?> →</a>
                <?php else: ?>
                    <?php echo $evenement->description ?>
                <?php endif ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>