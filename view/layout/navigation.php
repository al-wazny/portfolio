<?php function navigation() { 
    $isEnglish = $_COOKIE['langID'] == "en-GB" ? true : false; ?>

    <nav class="container w-100 d-flex justify-content-between">
        <div class="my-auto">
            <img class="logo" src="../../assets/img/Selection_002.png" alt="company logo">
        </div>
        <div class="navigation-items">
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
    </nav>
<?php } ?>
