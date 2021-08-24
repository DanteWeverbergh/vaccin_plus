<?php

// total aan juiste vaccinatiecentrum koppelen

if($center['center_id'] == 1) {
    $total = $total1;
   
}

if($center['center_id'] == 2) {
    $total = $total2;
  
}

if($center['center_id'] == 3) {
    $total = $total3;
  
}


?>


<a class="list-item" href="vaccin/detail/<?= $center['center_id']; ?>"><?= $center['name']; ?>, <?= $center['city']; ?><span
        class="badge badge-primary"><?= $total ?> vaccins</span>
</a>