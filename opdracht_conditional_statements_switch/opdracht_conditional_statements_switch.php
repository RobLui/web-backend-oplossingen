<?php
$getal = 2;
$dag_vd_week = "nog niets";


switch($getal)  
{
case 1:
$dag_vd_week = "maandag";
    break;
case 2:
$dag_vd_week = "dinsdag";
    break;
case 3:
$dag_vd_week = "woensdag";
    break;
case 4:
$dag_vd_week = "donderdag";
    break;
case 5:
$dag_vd_week = "vrijdag";
    break;
case 6: 
$dag_vd_week = "zaterdag";
    break;
case 7:
$dag_vd_week = "zondag";
    break;
default:
$dag_vd_week = "het moet een nummer tss 0 en 7 zijn";
    break;
}

?>


    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht switch</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht switch: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Maak gebruik van een switch en probeer alles te herschrijven i.p.v. te kopiëren.</li>
                <p>

                    Bij het nummer
                    <?php echo $getal?> hoort:
                        <?php echo $dag_vd_week?>
                </p>

            </ul>

        </section>

    </body>

    </html>