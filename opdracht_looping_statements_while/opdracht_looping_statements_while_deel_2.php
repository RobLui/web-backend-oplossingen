<?php 

$boodschappenlijstje = ["appelen","vis","vlees","groenten","soja","boter"];

?>



    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht while</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht while: deel 2</h1>

            <ul>
                <li>Maak een array <code>$boodschappenlijstje</code> en plaats hierin enkele boodschapjes.</li>

                <li>Dit zit er in myn boodschappenlijstje:</li>
                <!--                       -->
                <?php
                        $i = 0;
                        while ($i < count($boodschappenlijstje) ): ?>
                    <li>
                        <?php echo $boodschappenlijstje[$i] ?>
                    </li>

                    <?php $i++ ?>
                        <?php endwhile ?>
            </ul>

            <ul>
                <li>Print deze boodschappen af in het HTML-gedeelte en plaats ze in <code>&lt;li&gt;</code>-elementen. Al deze <code>&lt;li&gt;</code>-elementen staan op hun beurt weer in één <code>&lt;ul&gt;</code>.</li>

                <li>Valideer je code met de <a href="http://validator.w3.org/">W3 Validator</a>. Dit doe je door de source-code van je document te bekijken <kbd>ctrl + u</kbd> / <kbd>⌘-Option-U</kbd>, deze te kopiëren en te plakken in de "direct input" tab.</li>

                <li>Als je code niet geldig is, maak je de nodige wijzigingen.</li>
            </ul>
        </section>
    </body>

    </html>