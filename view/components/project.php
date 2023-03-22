<?php function project(String $imgPath, String $projectName, String $projectDescription) { ?>
    <div class="project-wrapper">
        <img src="<?= $imgPath ?>" alt="">
        <h3 class="project-name"><?= $projectName ?></h3>
        <p class="project-description"><?= $projectDescription ?></p>
    </div>
<?php } ?>