<?php require_once "./view/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/css/swiper.min.css">
    <title>Digital Product Agency | Wishfulgoods</title>
</head>
<body id="bootstrap-overrides">
    <?= navigation(); ?>
    <main>
        <section class="hidden" id="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 text-center text-lg-left">
                        <p class="intro"><?= $translation->introduction->intro ?></p>
                        <h1><?= $translation->introduction->title ?></h1>
                        <p class="agency-description mb-4"><?= $translation->introduction->description ?></p>
                        <div class="btn-area d-flex justify-content-center justify-content-lg-start">
                            <a class="btn btn-primary"><?= $translation->introduction->ourWork ?></a>
                            <a class="btn btn-outline-dark"><?= $translation->introduction->ourServices ?></a>
                        </div>
                        <!-- <div class="stats d-flex flex-column flex-md-row justify-content-center justify-content-lg-start">
                            <?= 
                            experienceStat("4", $translation->introduction->yearsExperience);
                            experienceStat(96, $translation->introduction->satisfiedClients);
                            experienceStat("16+", $translation->introduction->projectsCompleted); 
                            ?>
                        </div> -->
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="illustration d-flex justify-content-center p-0 mt-5 mt-lg-0">
                            <img src="./assets/img/Website designer-amico.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="hidden" id="services">
            <h2><?= $translation->services->title ?></h2>
            <div class="container">
                <div class="row">
                    <?= 
                    service(
                        "../../assets/icons/Group.png",
                        $translation->services->development,
                        $translation->services->developmentDescription
                    );
                    service(
                        "../../assets/icons/011-logo.png",
                        $translation->services->hosting,
                        $translation->services->hostingDescription
                    );
                    service(
                        "../../assets/icons/039-branding.png",
                        $translation->services->automation,
                        $translation->services->automationDescription
                    );
                    ?>
                </div>
            </div>
        </section>

        <section class="hidden" id="projects">
            <div class="container">
                <h2><?= $translation->projects->title ?></h2>
                <div class="row">
                    <?=
                    project(
                        '../../assets/img/Rectangle 4401(1).png',
                        'Lensology',
                        'Graphic Design, Web Design & Development'
                    );
                    project(
                        '../../assets/img/Rectangle 4401.png',
                        'IndigoFitness',
                        'Graphic Design, Web Design & Development'
                    );
                    project(
                        '../../assets/img/Rectangle 4401(1).png',
                        'The Green Program',
                        'Graphic Design, Web Design & Development'
                    );
                    project(
                        '../../assets/img/Rectangle 4401.png',
                        'FastPAYE',
                        'Graphic Design, Web Design & Development'
                    );
                    project(
                        '../../assets/img/Rectangle 4401(1).png',
                        'Prime UK Management',
                        'Graphic Design, Web Design & Development'
                    );
                    project(
                        '../../assets/img/Rectangle 4401.png',
                        'PAX Home',
                        'Graphic Design, Web Design & Development'
                    );
                    ?>
                </div>
            </div>
        </section>


        <section class="hidden swiper-cpagination" id="testimonials">
            <div class="container">
                <p class="title"><?= $translation->testimonials->intro ?></p>
                <h2><?= $translation->testimonials->title ?></h2>
                <div class="swiper-container swiper-container-horizontal loco_listing__carousel" data-slides-per-view="3" data-space-between="30" data-loop="true" data-click="false" data-spvxs="1" data-center-xs-slide="true" data-spvsm="auto" data-spvmd="2" data-spvlg="3" data-spvxl="3" data-dynamic-bullets="true" data-free-mode="true">
                    <div class="swiper-wrapper pb-5">
                        <?= 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        testimonial(
                            "../assets/img/placeholder-user.png",
                            "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                            "Cooper, Kristin",
                            "Amazon",
                            4
                        ); 
                        ?>
                    </div>
                    <div class="swiper-pagination loco_carousel__pagination carousel__pagination"></div>
                </div>
            </div>
        </section>

        <section class="hidden" id="contact">
            <div class="container">
                <div class="contact-wrapper row">
                    <div class="col-12 col-md-9 text-center text-md-left mb-2 mb-md-0">
                        <h3><?= $translation->contact->workTogether ?></h3>
                        <p><?= $translation->contact->teamDescription ?></p>
                    </div>
                    <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
                        <a class="btn" href="mailto:lalwazny@gmail.com">Get A Quote</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= footer($translation) ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/js/swiper.min.js"></script>

    <script src="https://kit.fontawesome.com/6c8be80177.js" crossorigin="anonymous"></script>
    <script src="./assets/js/app.js"></script>
    
</body>
</html>