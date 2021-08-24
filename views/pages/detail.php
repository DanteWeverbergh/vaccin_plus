<section>
    <h1><?= $center->name; ?>, <?= $center->city; ?> <span class="badge"><?= $total; ?> beschikbare vaccins</span></h1>


    <p>
        <?= $center->street; ?> <?= $center->nr; ?><br>
        <?= $center->postalcode; ?> <?= $center->city; ?>
    </p>


    <h2><?= $total; ?> beschikbare vaccins</h2>
    <div class="list">

        <?php

            foreach ($vaccins as $vaccin) {
                include BASE_DIR . '/views/_partials/vaccin_lis_item.php';
            }
        ?>


    </div>
    <a href="/vaccin/claim/<?= $center_id; ?>" class="btn btn-primary">Ik wil er een</a>


    <a href="/vaccin">Terug naar alle vaccinatiecentra</a>
</section>

