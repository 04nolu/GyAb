<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <script defer src="../js/nav.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">

    <link rel="stylesheet" href="../css/style.css" />
    <title>Projekt - Ludvig Noriander</title>
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
            <li><a href="../Test/testing.php">Projekt</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>


    <main>
        <h1>TEST</h1>
        <br>
        <?php
        $folderNames = ['../inc/Projekt/Ettan/Webbutveckling 1/CSS 1', '../inc/Projekt/Ettan/Webbutveckling 1/CSS 2'];

        foreach ($folderNames as $folderName) {
            include '../inc/generateLinks.php';
        }
        ?>
    </main>


    <footer>
        <div class="footerCol">
            <h4>Test</h4>
            <ul>
                <li><a href="#">Lorem 1</a></li>
                <li><a href="#">Ipsum 2</a></li>
                <li><a href="#">Lorem 3</a></li>
            </ul>
        </div>
        <div class="footerCol">
            <h4>Dokumentation</h4>
            <ul>
                <li><a href="#">Gymnasiearbetes-rapport</a></li>
                <li><a href="#">Ipsum 2</a></li>
                <li><a target="_blank" href="https://github.com/04nolu/GyAb">GitHub</a></li>
            </ul>
        </div>
        <div class="footerCol">
            <h4>Kontakta mig</h4>
            <ul>
                <li><a>Ludvig Noriander</a></li>
                <li><a>+46 73 627 40 07</a></li>
                <li><a>04nolu@skola.engelholm.se</a></li>
            </ul>
        </div>
        <!--    <p>Denna hemsida hostar all sin källkod på GitHub</p> -->
    </footer>

</body>

</html>