<?php

if (!isset($_COOKIE['langID'])) {
    $_COOKIE['langID'] = 'en-GB';
}

if(isset($_GET['language'])) {
    $_COOKIE['langID'] = $_GET['language'];
}

$lang = $_COOKIE['langID'];

$translationFile = file_get_contents("./view/translation/snippets/$lang.json");
$translation = json_decode($translationFile);