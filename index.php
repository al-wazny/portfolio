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
    <title>Document</title>
</head>
<body>
    <?= navigation(); ?>
    <main>
        <section id="introduction">
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
                            <?= experienceStat("10+", "Years experience") ?>
                            <?= experienceStat("96+", "Satisfied Clients") ?>
                            <?= experienceStat("99+", "Projects Completed") ?>
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
        
        <section id="services">
            <div class="container">
                <div class="row">
                    <?= service(
                        'bluber',
                        "Website Hosting",
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "blub",
                        'Automation',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "blub",
                        'Graphic Design',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); ?>
                </div>
                <div class="row">
                    <?= service(
                        "blub",
                        'Web development',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); 
                    service(
                        "blub",
                        'Website Hosting',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    );
                    service(
                        "blub",
                        'Graphic Design',
                        'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis  mei Mei an pericula euripidis.'
                    ); ?>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div class="container">
                <p class="title">Testimonials</p>
                <h2>What Our Clients Say About Us</h2>
                <div class="d-flex">
                    <?= testimonial(
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
                        3
                    );
                    testimonial(
                        "../assets/img/placeholder-user.png",
                        "The Services provided are really great, we received a genuine advice and at very reasonable cost.",
                        "Cooper, Kristin",
                        "Amazon",
                        5
                    );?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>