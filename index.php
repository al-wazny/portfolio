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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body id="bootstrap-overrides">
    <?= navigation(); ?>
    <main>
        <section class="hidden" id="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p class="intro">A trusted digital agency</p>
                        <h1>Digital Product Design Agency</h1>
                        <p class="agency-description">Octave are a web design agency, creating beautiful, fast and effective websites for new and established businesses.</p>
                        <div class="btn-area">
                            <a class="btn btn-primary">Our Work</a>
                            <a class="btn btn-outline-dark">Our Services</a>
                        </div>
                        <div class="stats d-flex">
                            <?= 
                            experienceStat(10, "Years experience");
                            experienceStat(96, "Satisfied Clients");
                            experienceStat(99, "Projects Completed"); 
                            ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="illustration">
                            <img src="./assets/img/Website designer-amico.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="hidden" id="services">
            <h2>Our Services</h2>
            <div class="container">
                <div class="grid">
                    <?= 
                    service(
                        '../../assets/icons/Grafich Design.png',
                        "Website Hosting",
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "../../assets/icons/011-logo.png",
                        'Automation',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "../../assets/icons/039-branding.png",
                        'Graphic Design',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); 
                    service(
                        "../../assets/icons/Group.png",
                        'Web development',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); 
                    service(
                        "../../assets/icons/Group(1).png",
                        'Website Hosting',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "../../assets/icons/Grafich Design.png",
                        'Graphic Design',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); 
                    ?>
                </div>
            </div>
        </section>

        <section class="hidden" id="projects">
            <div class="container">
                <h2>Our recent Projects</h2>
                <div class="grid">
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

        <section class="hidden" id="testimonials">
            <div class="container">
                <p class="title">Testimonials</p>
                <h2>What Our Clients Say About Us</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?= testimonial(
                                "../assets/img/placeholder-user.png",
                                "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                "Cooper, Kristin",
                                "Amazon",
                                4
                           ); ?>   
                        </div>
                        <div class="swiper-slide">
                            <?= testimonial(
                                "../assets/img/placeholder-user.png",
                               "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                "Cooper, Kristin",
                               "Amazon",
                                4
                           ); ?> 
                        </div>
                        <div class="swiper-slide">
                            <?= testimonial(
                                "../assets/img/placeholder-user.png",
                               "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                "Cooper, Kristin",
                               "Amazon",
                                4
                           ); ?> 
                        </div>
                        <div class="swiper-slide">
                            <?= testimonial(
                                "../assets/img/placeholder-user.png",
                               "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                "Cooper, Kristin",
                               "Amazon",
                                4
                           ); ?> 
                        </div>
                        <div class="swiper-slide">
                            <?= testimonial(
                                "../assets/img/placeholder-user.png",
                               "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                "Cooper, Kristin",
                               "Amazon",
                                4
                           ); ?> 
                        </div>
                        <div class="swiper-slide">
                            <?= testimonial(
                                    "../assets/img/placeholder-user.png",
                                "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                                    "Cooper, Kristin",
                                "Amazon",
                                    4
                            ); ?> 
                        </div>
                   
                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <section class="hidden" id="contact">
            <div class="container">
                <div class="contact-wrapper row">
                    <div class="col-9">
                        <h3>Let's work together</h3>
                        <p>We're a team of non-cynics who truly care for our work.</p>
                    </div>
                    <div class="col-3 d-flex justify-content-center align-items-center">
                        <a class="btn" href="#">Get A Quote</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= footer() ?>
    
    <script src="https://kit.fontawesome.com/6c8be80177.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>