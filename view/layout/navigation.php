<?php function navigation() { 
    $isEnglish = $_COOKIE['langID'] == "en-GB" ? true : false; ?>
    <nav class="w-100 d-flex justify-content-between px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="my-auto">
            <img class="logo" src="../../assets/img/Selection_002.png" alt="">
        </div>
        <!-- <div class="navigation-items">
            <ul class="d-flex pl-0 m-0">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Work</a></li>
            </ul>
        </div> -->
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