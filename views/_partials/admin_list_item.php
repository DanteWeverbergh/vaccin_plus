<?php if($vaccin['status'] == 0) : ?>


<div class="list-item available open">
    <div class="id">#<?= $vaccin['vaccin_id']; ?></div>
    <div class="date">vrijdag 15 januari 18:00</div>
    <div class="claimer">
        <div class="name"></div>
    </div>
</div>


<?php else :?>

<div class="list-item available">
    <div class="id">#<?= $vaccin['vaccin_id']; ?></div>
    <div class="date">vrijdag 15 januari 18:00</div>
    <div class="claimer">
        <div class="name"><?=$vaccin['claimer'];?></div>
        <a href="mailto:<?=$vaccin['email'];?>" class="btn btn-light btn-sm"><i class="fa fa-envelope"></i></a>
        <a href="tel:<?=$vaccin['phone'];?>" class="btn btn-light btn-sm"><i class="fa fa-mobile"></i></a>
    </div>
</div>

<?php endif ?>















<!--


<div class="list-item available open">
        <div class="id">#9</div>
        <div class="date">vrijdag 15 januari 18:00</div>
        <div class="claimer">
            <div class="name"></div>
                                </div>
</div>

    <div class="list-item available">
        <div class="id">#8</div>
        <div class="date">vrijdag 15 januari 18:00</div>
        <div class="claimer">
            <div class="name">Dieter De Weirdt</div>
                        <a href="mailto:dieter@deweirdt.be" class="btn btn-light btn-sm"><i class="fa fa-envelope"></i></a>
                                    <a href="tel:123456789" class="btn btn-light btn-sm"><i class="fa fa-mobile"></i></a>
                    </div>
    </div>

    <div class="list-item open">
        <div class="id">#4</div>
        <div class="date">dinsdag 12 januari 18:00</div>
        <div class="claimer">
            <div class="name"></div>
                                </div>
    </div>


-->