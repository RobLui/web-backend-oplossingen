<?php 

// Maak een array waarin je 10 dieren opslaat(doe dit op 2 verschillende manieren)
$tien_dieren_manier_1 = ["aap","vis","zebra","koala","kangoeroe","kameel","hond","kat","rat","vogel"];

$tien_dieren_manier_2[0] = "aap";
$tien_dieren_manier_2[1] = "vis";
$tien_dieren_manier_2[2] = "zebra";
$tien_dieren_manier_2[3] = "koala";
$tien_dieren_manier_2[4] = "kangoeroe";
$tien_dieren_manier_2[5] = "kameel";
$tien_dieren_manier_2[6] = "hond";
$tien_dieren_manier_2[7] = "kat";
$tien_dieren_manier_2[8] = "rat";
$tien_dieren_manier_2[9] = "vogel"; 
  
$vijf_voertuigen_multidim = array(
    "landvoertuigen"    => array("auto","brommer"),
    "luchtvoertuigen"   => array("luchtballon","vliegtuig"),
    "watervoertuigen"   => array("schip","zeilboot")
);


?>

    <!doctype html>

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

            <h1>Opdracht arrays basis: deel 1</h1>

            <ul>

                <li>Maak een array waarin je 10 dieren opslaat( doe dit op 2 verschillende manieren )</li>
                <li>Maak een nieuwe array met daarin 5 voertuigen, zorg er voor dat je kan bepalen om welke categorie van voertuig het gaat (2-dimensionele array), zoals 'landvoertuigen', 'watervoertuigen', 'luchtvoertuigen'.

                    <p>Wanneer je een <code>var_dump</code> van deze array doet, ziet het resultaat er ongeveer als volgt uit:</p>
                    <ul class="array-notation pre">
                        <li>
                            [ 'landvoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'Vespa'</li>
                                <li>[ 1 ] => 'fiets'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'watervoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'surfplank'</li>
                                <li>[ 1 ] => 'vlot'</li>
                                <li>[ 2 ] => 'schoener'</li>
                                <li>[ 3 ] => 'driemaster'</li>
                            </ul>
                        </li>
                        <li>
                            [ 'luchtvoertuigen' ] =>
                            <ul>
                                <li>[ 0 ] => 'luchtballon'</li>
                                <li>[ 1 ] => 'helicopter'</li>
                                <li>[ 2 ] => 'B52'</li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <p>
                    <?php echo var_dump($vijf_voertuigen_multidim);?>
                </p>
            </ul>
        </section>

    </body>

    </html>