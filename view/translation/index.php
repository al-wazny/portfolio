<?php

if (!isset($_COOKIE['langID'])) {
    $_COOKIE['langID'] = 'en-GB.json';
}

if(isset($_GET['language'])) {
    $_COOKIE['langID'] = $_GET['language'];
}

$lang = $_COOKIE['langID'];

foreach (glob("./snippets/*.json") as $file ) {
    echo $file;
}


$translation = file_get_contents("./view/translation/snippets/$lang.json");