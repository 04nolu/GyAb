<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <script defer src="js/nav.js"></script>
    <script defer src="js/rick.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">

    <link rel="stylesheet" href="css/style.css" />
    <title>Gymnasiearbete - Ludvig Noriander</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Ludvig GyAb</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Hem</a></li>
            <li><a href="om.html">Om</a></li>
            <li><a href="gymnasiearbete.html">Gymnasiearbete</a></li>
            <li><a href="projekt.php">Projekt</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <main>
        <h1>Projekt</h1>

        <p>Dessa filer har tyvärr ingen CHARSET inställning angiven, så förvänta dig att vissa tecken kan se konstiga ut!</p>

        <?php
        echo ('<div class="divPro">');

        $folderNames = [
            'inc/Projekt/Ettan/Webbutveckling 1/CSS 1',
            'inc/Projekt/Ettan/Webbutveckling 1/CSS 2'
        ];

        foreach ($folderNames as $folderName) {
            include 'inc/generateLinks.php';
        }

        $folderNames = [
            'inc/Projekt/Ettan/Webbutveckling 1/Projekt 1',
            'inc/Projekt/Ettan/Webbutveckling 1/Projekt 1/HTML 1',
            'inc/Projekt/Ettan/Webbutveckling 1/Projekt 1/HTML 2',
            'inc/Projekt/Ettan/Webbutveckling 1/Projekt 1/HTML 3'
        ];

        foreach ($folderNames as $folderName) {
            include 'inc/generateLinks.php';
        }

        $folderNames = [
            'inc/Projekt/Ettan/Webbutveckling 1/Snabbtest/Snabbtest 1',
            'inc/Projekt/Ettan/Webbutveckling 1/Snabbtest/Snabbtest 2',
            'inc/Projekt/Ettan/Webbutveckling 1/Snabbtest/Snabbtest 3',
            'inc/Projekt/Ettan/Webbutveckling 1/Snabbtest/Snabbtest 4'
        ];

        foreach ($folderNames as $folderName) {
            include 'inc/generateLinks.php';
        }

        echo ('</div>');
        ?>

        <p>(Jag hade egentligen också lagt in det jag gjort i trean men det hade blivit för tidskrävande)</p>
    </main>


    <footer>
        <div class="footerCol">
            <h4>Sociala Medier</h4>
            <ul>
                <li><a href="https://www.youtube.com/Tarzoq">YouTube</a></li>
                <li><a href="https://www.twitch.tv/Tarzoq">Twitch</a></li>
                <li><a href="https://steamcommunity.com/id/Tarzoq/">Steam</a></li>
            </ul>
        </div>
        <div class="footerCol">
            <h4>Dokumentation</h4>
            <ul>
                <li><a target="_blank" href="https://docs.google.com/document/d/1lrB25XbIbjTIBiGWHONGTtybTAH9td-TJE27IhIUxX8/edit?usp=sharing">Gymnasiearbetes-rapport</a>
                </li>
                <li><a target="_blank" href="https://docs.google.com/spreadsheets/d/1F2HWAkLDCe5jweN7dY0g8mldiBOjsFrSqQo5Ki_rfTI/edit?usp=sharing">Arbetad
                        tid</a></li>
                <li><a target="_blank" href="https://github.com/04nolu/GyAb">GitHub</a></li>
            </ul>
        </div>
        <div class="footerCol">
            <h4>Kontakta mig</h4>
            <ul>
                <li><a href="" id="aGolden">Ludvig Noriander</a></li>
                <li><a href="tel:+46736274007">+46 73 627 40 07</a></li>
                <li><a href="mailto:04nolu@skola.engelholm.se">04nolu@skola.engelholm.se</a></li>
            </ul>
        </div>
        <div id="copyfight">
            <p>© Copyfight 2020-2023 Ludvig Noriander | All Rights Deserved</p>
        </div>
    </footer>

</body>

</html>