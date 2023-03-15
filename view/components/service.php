<?php function service(String $icon, String $title, $description) { ?>
    <div class="service card">
        <div class="icon-wrapper rounded-circle d-flex justify-content-center align-items-center">
            <img src="<?= $icon ?>" alt="">
        </div>
        <h4><?= $title ?></h4>
        <p><?= $description ?></p>
    </div>
<?php } ?>