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
    <div class="container">
        <section id="testimonials">
            <p>Testimonials</p>
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
        </section>
    </div>
</body>
</html>