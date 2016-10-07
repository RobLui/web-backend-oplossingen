<?php 


$fruit = 'ananas';
$lengteFruit = strlen($fruit);
$positionVanA = strrpos($fruit, 'a');


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


            <h1>Opdracht string extra functions: deel 2</h1>

            <ul>
                <li>Maak een variabele <code>fruit</code> met waarde <code>'ananas'</code></li>

                <p>Dit zit er in de variabele fruit:
                    <?php echo $fruit ?>
                </p>

                <li>Bepaal de positie van de laatste 'a' in de variabele <code>$fruit</code>.</li>
                <li>Druk deze waarde af.</li>

                <p>De positie van de laatste "a" staat op plaats:
                    <?php echo $positionVanA ?>
                </p>

                <li>Zet de value van de <code>$fruit</code> variable in hoofdletters enkel door gebruik te maken van een PHP-functie.</li>

                <p>Het nieuwe soort fruit is:
                    <?php echo str_replace("a",$lengteFruit,$fruit) ?>
                </p>

            </ul>

        </section>

    </body>

    </html>