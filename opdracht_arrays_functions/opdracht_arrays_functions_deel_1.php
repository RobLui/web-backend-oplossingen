<?php 

$array_dieren = ["kat","vis","nijlpaard","eekhoorn","giraf","olifant","hond"];
$aantal_dieren = count($array_dieren);
$teZoekenDier = "muis";

?>



    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht array functies</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">
        <section class="body">

            <h1>Opdracht array functies: deel 1</h1>

            <ul>
                <li>Maak een array waarin je meer dan 5 dieren plaatst</li>
                <!-- $array_dieren -->

                <li>Laat het script berekenen hoeveel elementen er in de array zitten en druk af naar het scherm</li>
                <!-- $aantal_dieren -->
                <p>Er zitten
                    <?php 
                echo $aantal_dieren;
                ?> dieren in de array
                </p>

                <li>Maak het mogelijk om met een variabele
                    <code>$teZoekenDier</code> een dier te zoeken in de array, druk tevens een gepaste boodschap af (gevonden/niet gevonden).</li>
                <p>
                    <?php 
                if(in_array($teZoekenDier,$array_dieren)){
                    echo "Het gezochte dier: " . $teZoekenDier . " zit in de array";
                }
                else{
                    echo "Het gezochte dier: " . $teZoekenDier . " zit niet in de array";
                }    
                ?>
                </p>
            </ul>
        </section>

    </body>

    </html>