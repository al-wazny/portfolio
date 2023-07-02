<?php function footer($translation) { ?>
    <footer>
        <div class="container">
            <div class="row px-3">
                <div class="col-12 col-md-6 col-xl-4 mb-5">
                    <img src="../../assets/img/Auswahl_001__1_-removebg-preview 1.png" alt="">
                    <p><?= $translation->footer->agencyDescription ?></p>
                </div>
                <div class="services-col col-12 col-md-6 col-xl-4 pl-md-4 pl-lg-5 mb-5">
                    <h3>Our Services</h3>
                    <ul class="p-0 m-0">
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Automation</a></li>
                        <li><a href="#">Website Hosting</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>
                <div class="contact-col col-12 col-md-6 col-xl-4 ">
                    <h3>Contact Us</h3>
                    <div class="contact-info">
                        <div class="whats-app">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p>+49 178 5792020</p>
                        </div>
                        <div class="email">
                            <i class="fa-regular fa-envelope"></i>
                            <p>support@wishfulgoods.eu</p>
                        </div>
                        <!-- <div class="social-media">
                            <p>Follow Us</p>
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/6c8be80177.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<?php } ?>