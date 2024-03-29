<?php function navigation() { 
    $isEnglish = $_COOKIE['langID'] == "en-GB" ? true : false; ?>
    <nav class="w-100 fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="my-auto">
                <a href="/"><img class="logo" src="../../assets/img/Selection_002.png" alt="company logo"></a>
            </div>
            <div class="w-100 d-none d-lg-flex justify-content-end">
                <div class="navigation-items mx-auto">
                    <ul class="d-flex pl-0 m-0">
                        <li><a class="navigation-item" href="/">Home</a></li>
                        <li><a class="navigation-item" href="/imprint.php">Impressum</a></li>
                        <li><a class="navigation-item" href="/privacy-policy.php">Datenschutz</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <div class="language-switch mr-2 mr-md-3 mr-lg-4">
                        <form method="get">
                            <select name="language" id="language" onchange="this.form.submit()">
                                <option value="de-DE">DE</option>
                                <option <?= $isEnglish ? 'selected' : '' ?> value="en-GB">EN</option>
                            </select>
                        </form>
                    </div>
                    <a class="btn btn-primary" href="mailto: support@wishfulgoods.eu">Get a Quote</a>
                </div>
            </div>
            <div class="d-flex d-lg-none align-items-center"  data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fas fa-bars fa-xl"></i>
            </div>
        </div>
        <div class="container collapse navbar-collapse mt-3 pl-4" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/imprint.php">Imprint</a></li>
                <li><a href="/privacy-policy.php">Privacy Policy</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>
