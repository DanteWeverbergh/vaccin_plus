<h1><?= $center->name ?>, <?= $center->city ?> <span class="badge">3 beschikbare vaccins</span></h1>


<p>
    Lucien Matthyslaan 9<br>
    <?= $center->postalcode ?> <?= $center->city ?></p>


<h2>Reserveer een vaccin</h2>


<form action="/vaccin/claimed/<?= $center->center_id ?>" method="POST">
    <label>
        <span>Naam</span>
        <input type="text" name="name" required>
    </label>
    <label>
        <span>E-mail</span>
        <input type="email" name="email" required>
    </label>
    <label>
        <span>GSM nr.</span>
        <input type="text" name="phone" required>
    </label>
    <label>
        <span>Rijksregister nr.</span>
        <input type="text" name="rijksregisternr" required>
    </label>
    <label>
        <span></span>
        <div><button type="submit" class="btn btn-primary" name="claim">Reserveren</button>
        <a href="/vaccin/detail/<?= $center->center_id ?>">Annuleren</a>
        </div>
    </label>
    
</form>
