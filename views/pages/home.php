<div class="block">
    <p>Dagelijks worden er voldoende vaccins klaargemaakt per vaccinatiecentra om de planning van die dag succesvol af
        te ronden. Hierbij bestaat de mogelijkheid dat er 's avonds vaccins over zijn.</p>
    <p>Hieronder vinden jullie een overzicht van de vaccinatiecentra waar er nog beschikbare vaccins zijn. Let wel dat
        je binnen de voorziene tijd op de locatie kan aanwezig zijn.</p>
    <p><strong>Let wel:</strong> Heb je verkoudheidssymptomen dan kom je niet in aanmerking voor een vaccin. Vergeet ook
        niet je identiteitskaart mee te brengen!</p>
</div>

<h1>Beschikbare vaccins</h1>

<div class="list">
    <?php

        foreach ($centers as $center) {
            include BASE_DIR . '/views/_partials/center_list_item.php';
        }

    ?>

</div>