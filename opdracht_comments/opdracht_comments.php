<?php 
//variabelen worden hier aangemaakt om later ergens ander op te kunnen roepen  
$voornaam = "Robbert";
$achternaam = "Luit"

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
    </head>

    <body class="web-backend-opdracht">

        <section class="body">
            <p>
                <?php 
            echo $voornaam . " " . $achternaam
            ?>
            </p>
        </section>
    </body>

    </html>