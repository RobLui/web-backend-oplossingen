<?php 

//$arrayVanNummers = [1,2,3,4,5,6,7];
//$arrayVanDagen = ["maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag","zondag"];

$random_nummer = 4;
$dag_vd_week = "voorlopig_nog_niets";
    
if($random_nummer == 1)
{
    $dag_vd_week = "maandag";
}
if($random_nummer == 2)
{
    $dag_vd_week =  "dinsdag";
}
if($random_nummer == 3)
{
    $dag_vd_week =  "woensdag";
}
if($random_nummer == 4)
{
    $dag_vd_week = "donderdag";
}
if($random_nummer == 5)
{
    $dag_vd_week = "vrijdag";
}
if($random_nummer == 6)
{
    $dag_vd_week = "zaterdag";
}
if($random_nummer == 7)
{
    $dag_vd_week = "zondag";
}
?>




    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht conditional statements</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
        <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
        <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">

            <h1>Opdracht conditional statements: deel 1</h1>

            <ul>
                <li>Maak een HTML-document met een PHP code-block</li>
                <li>Maak een PHP-script dat aan de hand van een getal ( tussen 1 en 7 ) de bijhorende dag afprint in kleine letters (geen hoofdletters!)</li>
                <li>Bijvoorbeeld, wanneer <code>$getal</code> gelijk is aan 1 dan wordt de string <code>'maandag'</code> op het scherm getoond</li>
                <br>
                <p>Het getal
                    <?php echo $random_nummer?>
                        geeft:
                        <?php echo $dag_vd_week?>
                </p>
            </ul>

        </section>

    </body>

    </html>

    <!-- PROBEERSEL     
                <?php 
                if($arrayVanNummers[0] == 1){
                    echo "getal \"1\" geeft: " . $arrayVanDagen[0] . ". ";
                }
                if($arrayVanNummers[1]  == 2){
                    echo "getal \"2\" geeft: " . $arrayVanDagen[1] . ". ";
                }
                if($arrayVanNummers[2]  == 3){
                    echo "getal \"3\" geeft: " . $arrayVanDagen[2] . ". ";
                }
                if($arrayVanNummers[3]  == 4){
                    echo "getal \"4\" geeft: " . $arrayVanDagen[3] . ". ";
                }
                if($arrayVanNummers[4]  == 5){
                    echo "getal \"5\" geeft: " . $arrayVanDagen[4] . ". ";
                }
                if($arrayVanNummers[5]  == 6){
                    echo "getal \"6\" geeft: " . $arrayVanDagen[5] . ". ";
                }
                if($arrayVanNummers[6]  == 7){
                    echo "getal \"7\" geeft: " . $arrayVanDagen[6] . ". ";
                }
                ?>
-->