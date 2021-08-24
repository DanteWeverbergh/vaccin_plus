<h1>Overzicht <span class="badge"><?= $center->name; ?>, <?= $center->city; ?></span></h1>



<div class="list list-admin">


    <?php

        foreach ($vaccins as $vaccin) {
            include BASE_DIR . '/views/_partials/admin_list_item.php';
        }
    ?>

</div>