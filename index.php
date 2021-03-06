<?php
require_once('/home/www/rover/forum/SSI.php');
?>
<!DOCTYPE html>
<html class="mdl-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>DPSG Windrose Anzing/Poing</title>

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Start Cookie Plugin -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            message: 'Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können.',
            dismiss: 'Ok, verstanden',
            learnMore: 'Mehr Infos',
            link: 'http://test.dpsg-windrose.de/datenschutzerklarung.php',
            theme: 'light-floating'
        };
    </script>
    <script type="text/javascript" src="//s3.amazonaws.com/valao-cloud/cookie-hinweis/script-v2.js"></script>
    <!-- Ende Cookie Plugin -->

</head>
<body  style="background-image: url('images/Backgound/HomeBackground.JPG'); background-repeat: no-repeat; width: 100%; height: 100%; background-position: center;background-repeat: no-repeat;background-size: cover;">
<div class="mdl-layout mdl-js-layout">
    <?php
    include "php-helper/header.php";
    ?>
    <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->
            <div class="mdl-grid">

                <?php include "wartungsnachricht.php" ?>

                <div class="news_Card_location mdl-cell mdl-cell--10-col mdl-cell--10-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card__title headline">
                            <h4>Herzlich Willkommen</h4>
                        </div>
                            <div class="CN_index_Main_Card-logo mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--1-col-phone">
                                <img src="images/logo/stammeslogo_home.png" alt="stammeslogo_home">
                            </div>

                            <div class="CN_index_Main_Card-text mdl-cell mdl-cell--10-col mdl-cell--10-col-tablet mdl-cell--12-col-phone">
                                bei den Pfadfindern des Stammes Windrose aus Anzing und Poing. </br>
                                Unser Stamm hat ungefähr 80 Mitglieder im Alter von 7 bis ... Jahren.</br>
                                Wir <b>Pfadfinder</b> treffen uns regelmäßig in den Stufen zu Gruppenstunden</br>
                                und zu gemeinsamen Aktionen entweder im Pfarrheim in <b>Poing</b> oder auf unserem Stammesplatz in <b>Anzing</b>.
                            </div>

                </div>

                <?php
                include 'aktuellsteNews.php';
                ?>

            </div>
        </div>
            <?php
            include 'php-helper/footer.php';
            ?>
    </main>
</div>

</body>
</html>