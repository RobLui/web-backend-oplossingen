<?php 
$random_nummer = 6;
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

            <h1 class="extra">Opdracht conditional statements: deel 2</h1>

            <ul>
                <li>Maak een kopie van deel 1</li>
                <li>Zet de naam van de dag (bv <code>'maandag'</code>) doormiddel van een string-functie dan naar hoofdletters om (bv <code>'MAANDAG'</code>).
                    <p>
                        <?php $dag_vd_week = strtoupper($dag_vd_week); 
                        echo $dag_vd_week?>
                    </p>
                </li>
                <li>Zet alle letters in hoofdletters, behalve de 'a'</li>
                <p>
                    <?php echo str_replace("A", "a", $dag_vd_week); ?>
                </p>
                <li>Zet alle letters in hoofdletters, behalve de laatste 'a'</li>
                <p>
                    <?php echo substr_replace(strtoupper($dag_vd_week), 'a', strrpos($dag_vd_week, 'A'),1 );?>
                </p>
            </ul>

        </section>

        <ul>

        </ul>

    </body>

    </html>