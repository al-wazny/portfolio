<?php function service(String $icon, String $iconAlt, String $title, $description) { ?>
    <div class="col-12 col-md-6 col-lg-4 mx-auto">
        <div class="service card">
            <div class="icon-wrapper rounded-circle d-flex justify-content-center align-items-center">
                <img src="<?= $icon ?>" alt="<?= $iconAlt ?>">
            </div>
            <h4><?= $title ?></h4>
            <p><?= $description ?></p>
        </div>
    </div>
<?php } ?>