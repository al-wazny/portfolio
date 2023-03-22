<?php function experienceStat(int $amount, String $title) { ?>
    <div class="stat">
        <h3 data="0" class="count"><?= $amount ?></h3>
        <p><?= $title ?></p>
    </div>
<?php } ?>