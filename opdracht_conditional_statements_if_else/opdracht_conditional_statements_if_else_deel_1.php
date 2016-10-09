<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht if else</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">

        <h1>Opdracht if else: deel 1</h1>

        <ul>
            <li>Maak een PHP-script dat kan bepalen of de variabele 'jaartal' al dan niet een schrikkeljaar is
                <ul>
                    <li>Een jaar is een schrikkeljaar als het deelbaar is door 4.</li>
                    <?php 
                        $jaartal_dat_gechecked_moet_worden = 2000;
                        //% = modulo (rest)
                        if($jaartal_dat_gechecked_moet_worden%4 == 0 
                           && ($jaartal_dat_gechecked_moet_worden%100 != 0 
                               || ($jaartal_dat_gechecked_moet_worden%400 == 0))
                          )
                            {
                            echo $jaartal_dat_gechecked_moet_worden . " is een schrikkeljaar.";
                            }
                        else{
                            echo $jaartal_dat_gechecked_moet_worden . " is geen schrikkeljaar.";
                        }
                        
                        ?>
                        <li>Een jaar is géén schrikkeljaar als het deelbaar is door 100, TENZIJ het wel deelbaar is door 400.</li>
                </ul>
            </li>
        </ul>
    </section>

</body>

</html>