<?php function testimonial(String $imgPath, String $testimonial, String $name, String $company, int $rating) { ?>
    <div class="swiper-slide testimonial-wrapper card">
        <img class="rounded-circle" src="<?= $imgPath ?>" alt="client placeholder image">
        <p class="testimonial">
            “<?= $testimonial ?>"
        </p>
        <div class="testimonial-footer">
            <div class="author mb-2"><?= $name ?></div>
            <div class="d-flex justify-content-between">
                <div class="company"><?= $company ?></div>
                <div class="rating d-flex">
                    <div class="mr-2"><?= sprintf("%.1f", $rating) ?></div>
                    <div class="stars">
                        <?php for($i=0; $i<5; $i++): ?>
                            <span class="fa fa-star <?= $i<$rating ? "checked" : "" ?>"></span>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>