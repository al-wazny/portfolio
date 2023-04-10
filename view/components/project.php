<?php function project(String $imgPath, String $projectName, String $projectDescription, String $imgAlt="recent project preview image placeholder") { ?>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="project-wrapper">
            <img src="<?= $imgPath ?>" alt="<?= $imgAlt ?>">
            <h3 class="project-name"><?= $projectName ?></h3>
            <p class="project-description"><?= $projectDescription ?></p>
        </div>
    </div>
<?php } ?>