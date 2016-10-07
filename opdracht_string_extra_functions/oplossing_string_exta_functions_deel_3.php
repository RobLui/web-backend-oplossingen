<?php 


$lettertje = 'e';
$cijfertje = 3;
$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht string extra functions</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht string extra functions: deel 3</h1>

            <ul>
                <li>Maak een variabele <code>$lettertje</code> met <code>'e'</code> als value</li>

                <p>Dit zit er in de variabele lettertje:
                    <?php echo $lettertje ?>
                </p>

                <li>Maak een variabele <code>$cijfertje</code> met <code>3</code> als value</li>

                <p>Dit zit er in de variabele cijfertje:
                    <?php echo $cijfertje ?>
                </p>

                <li>Maak een variabele <code>$langsteWoord</code> met <code>'zandzeepsodemineralenwatersteenstralen'</code> als value</li>

                <p>Dit zit er in de variabele langsteWoord:
                    <?php echo $langsteWoord ?>
                </p>

                <li>Vervang nu alle e’s in de <code>$langsteWoord</code> variable door 3's.

                </li>
                <p>
                    <?php echo str_replace($lettertje,$cijfertje,$langsteWoord) ?>
                </p>
            </ul>

        </section>

    </body>

    </html>