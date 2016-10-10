<?php 

$array_getallen = [1,2,3,4,5];
$omgekeerde_array = array_reverse($array_getallen);

$vermenigvuldiging_getallen_uit_array = $array_getallen[0] * $array_getallen[1] * $array_getallen[2] * $array_getallen[3] *  $array_getallen[4];



?>


    <doctype html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Opdracht arrays basis</title>
            <link rel="stylesheet" href="http://web-backend.local/css/global.css">
            <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
            <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
        </head>

        <body class="web-backend-opdracht">

            <section class="body">

                <h1 class="extra">Opdracht arrays basis: deel 2</h1>

                <ul>
                    <li>Maak een array waarin je de getallen 1, 2, 3, 4, 5 in plaatst</li>
                    <p>Deze waarden zitten in array 1:
                        <?php 
                        //afprinten wat er in de array zit
                        print_r(array_values($array_getallen)); 
                        ?>

                    </p>
                    <li>Vermenigvuldig alle getallen met elkaar en druk af naar het scherm</li>
                    <p>Dit is het resultaat van de vermenigvuldiging:
                        <?php echo $vermenigvuldiging_getallen_uit_array?>
                    </p>

                    <li>Druk de oneven getallen af (controle in script, niet zelf selecteren welke je afdrukt)</li>
                    <!--
                        //index = i
                        //count = lengte van de array (index start op 0)
                        //index++
                    -->
                    <p>
                        <?php for ($i = 0; $i < count($array_getallen); $i++) { 
                        // Even als het deelbaar is door 2 zonder rest uit te komen
                          if ($array_getallen[$i] % 2 == 0) {
                              //even 
                          }
                          else {
                              //oneven
                            echo "Plaats in de array: ", $i, " met waarde ", $array_getallen[$i], " is oneven </br>";
                          }
                        }
                    ?>
                    </p>
                    <li>Maak een tweede array waarin je de getallen 5, 4, 3, 2, 1 in plaatst</li>

                    <p>Deze waarden zitten in array 2:
                        <?php  
                        //afprinten wat er in de array zit
                        print_r(array_values($omgekeerde_array)); 
                        ?>
                    </p>

                    <li>Tel de getallen uit beide arrays met dezelfde index met elkaar op</li>

                    <p>
                        <?php for ($i = 0; $i < count($array_getallen); $i++) { 
                        // Even als het deelbaar is door 2 zonder rest uit te komen
                            $samentelling = $array_getallen[$i] + $omgekeerde_array[$i];
                            echo $array_getallen[$i] . "+" . $omgekeerde_array[$i] . "=" . $samentelling . "</br>";
                        }
                    ?>
                    </p>


                </ul>

            </section>

        </body>

        </html>