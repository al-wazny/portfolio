<?php function service(String $icon, String $title, $description) { ?>
    <div class="service card">
        <img class="rounded-circle" src="../../assets/img/placeholder-user.png" alt="">
        <h4><?= $title ?></h4>
        <p><?= $description ?></p>
    </div>
<?php } ?>