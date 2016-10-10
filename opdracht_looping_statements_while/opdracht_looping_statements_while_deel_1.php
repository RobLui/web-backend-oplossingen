<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht while</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-opdracht">

    <section class="body">

        <h1>Opdracht while: deel 1</h1>

        <ul>

            <li>Druk alle getallen af van 0 tot 100 afgescheiden door een komma en een spatie ' , '.</li>
            <li>Op een volgende lijn druk je alle getallen af die deelbaar zijn door 3 én groter zijn dan 40 mààr kleiner zijn dan 80.</li>

            <p>

                <?php  

            //for lus gebruikt voor deze oefening op te lossen, navragen bij Pascal of ik een while "moest" gebruiken
            //anders moet ik deze oefening nog aanpassen.
                for($i = 0; $i<=100; $i++)
                {
                    if ($i != 100)
                    {
                        echo $i . ", ";   
                    }
                    else if ($i == 100)
                    {
                        echo $i;
                    }
                }
                echo "</br>";

                for($i = 0; $i<=100; $i++)
                {
                    if($i%3 == 0 && ($i > 40 && $i < 80))
                       {
                           echo $i . " is deelbaar door 3, groter dan 40 en kleiner dan 80 </br>";
                       }
                }
                ?>
            </p>




        </ul>



</body>

</html>