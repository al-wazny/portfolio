<?php function navigation() { ?>
    <nav class="w-100 d-flex justify-content-around">
        <div class="my-auto">
            <img class="logo" src="../../assets/img/Selection_002.png" alt="">
        </div>
        <div class="navigation-items">
            <ul class="d-flex pl-0 m-0">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Work</a></li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <div class="language-switch">
                <select name="language" id="language">
                    <option value="deutsch">DE</option>
                    <option value="english">EN</option>
                </select>
            </div>
            <a class="btn btn-primary" href="#">Get a Quote</a>
        </div>
    </nav>
<?php } ?>