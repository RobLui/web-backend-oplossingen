<?php 

//$array_dieren = ["kat","vis","nijlpaard","eekhoorn","giraf","olifant","hond"];
//$aantal_dieren = count($array_dieren);
//$teZoekenDier = "muis";
//
//$sorteer_dieren = sort($array_dieren);
//$zoogdieren = ["leeuw","aap","vos"];
//
//$dierenlijst = array_merge($array_dieren,$zoogdieren);

$array_met_waarden = [8, 7, 8, 7, 3, 2, 1, 2, 4];

$array_zonder_dubbelen = array_unique($array_met_waarden);

$hoog_naar_laag = $array_zonder_dubbelen;
rsort($array_zonder_dubbelen);
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

            <h1 class="extra">Opdracht array functies: deel 3</h1>

            <ul>
                <li>Maak een array met volgende waarden:
                    <p>8, 7, 8, 7, 3, 2, 1, 2, 4</p>
                    <!-- $array_met_waarden -->
                </li>

                <li>Haal de duplicaten uit de array</li>
                <p>
                    Array zonder duplicaten:
                    <?php 
                     print_r($array_zonder_dubbelen);
                        
                        ?>
                </p>

                <li>Sorteer de array van groot naar klein</li>
                <p>
                    Gesorteerd van hoog naar laag:
                    <?php 
                     print_r($hoog_naar_laag);
                        ?>
                </p>

            </ul>

        </section>

    </body>

    </html>