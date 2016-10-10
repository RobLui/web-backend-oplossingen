<?php 

$array_dieren = ["kat","vis","nijlpaard","eekhoorn","giraf","olifant","hond"];
$aantal_dieren = count($array_dieren);
$teZoekenDier = "muis";

$sorteer_dieren = sort($array_dieren);
$zoogdieren = ["leeuw","aap","vos"];

$dierenlijst = array_merge($array_dieren,$zoogdieren);


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

            <h1 class="extra">Opdracht array functies: deel 2</h1>

            <ul>
                <li>Ga verder op deel 1 (maar maak een aparte kopie voor, overschrijf het origineel niet!)</li>

                <li>Zorg ervoor dat de array volgens het alfabet gesorteerd wordt ( A -> Z )</li>

                <p>
                    <?php 
                        for($i = 0; $i < $aantal_dieren; $i++){
                            print_r($array_dieren[$i]);
                            echo "</br>";
                        }
                    ?>
                </p>
                <li>Maak een array
                    <code>$zoogdieren</code> en plaats hier 3 dieren in, voeg vervolgens de 2 arrays met dieren samen in de array
                    <code>$dierenLijst</code>
                    <!-- $zoogdieren (3 dieren) , array_dieren (7 dieren) -->
                    <p>Dit zit er in de dierenlijst:
                        <?php 
                    print_r($dierenlijst);
                    ?>
                    </p>
                </li>
            </ul>
        </section>

    </body>

    </html>