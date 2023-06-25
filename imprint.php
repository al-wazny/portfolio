<?php require_once "./view/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Agency Specialized in web development from Karlsruhe providing custom tailored software solutions">
    <meta name="keywords" content="karlsruhe, software, agency, agentur, websites, webseiten, website, automation, hosting, custom, software solutions, web entwicklung, web, dev, development, high-quality service, responsive support, personalized support, modern technologie">
    <meta name="author" content="Ali Al-Wazny">
    <link rel="canonical" href="http://www.wishfulgoods.eu/index.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/css/swiper.min.css">
    <link rel="icon" href="./assets/icons/Auswahl_006.png" type="image/png">
    <title>Digital Product Agency | Wishfulgoods</title>

    <style>
        .container h1 {
            margin-bottom: 2.5rem;
        }

        .container p {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body id="bootstrap-overrides">
    <?= navigation(); ?>
    <main class="container" id="imprint-page">
        <div class="px-4">
            <h1>Impressum</h1>
            
            <h2>Angaben gemäß §5TMG</h2>
            <p>
                Ali Al-Wazny</br>
                wishfulgoods</br>
                belfortstr. 7</br>
                76133 Karlsruhe</br>
            </p>

            <h2>Kontakt</h2>
            <p>
                Telefon: 01785792020</br>
                E-Mail: support@wishfulgoods.eu
            </p>

            <h2>Gewerbeanmeldung</h2>
            <p>Die Gewerbeanmeldung nach 55c GewO wurde am 30.03.2023 durch Stadt Karlsruhe erteilt.</p>

            <h2>Redaktionell verantwortlich</h2>
            <p>Betreiber der Webseite: Ali Al-Wazny</p>

            <h2>Verbraucherstreitbeilegung/Universalschlichtstelle</h2>
            <p>
                Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer
                Verbraucherschlichtungsstelle teilzunehmen.
            </p>

            <p>Quelle: <a class="text-dark" href="https://www.e-recht24.de">https://www.e-recht24.de</a></p>
        </div>
    </main>
    <?= footer($translation) ?>
</body>