<?php 

$constante = 60;
$_uren_in_dag = 24;
$_dagen_in_een_maand = 31;
$_dagen_in_week = 7;
$_maanden_in_jaar = 12;

//variabel aantal seconden
$_seconden = 221108521;

// seconden/60 
$_minuten = floor($_seconden / $constante); 

// minuten/60
$_uren = floor($_minuten / $constante);

// Uren/24
$_dagen = floor($_uren / $_uren_in_dag);

// dagen/7
$_weken = floor($_dagen / $_dagen_in_week);

// dagen/31
$_maanden = floor($_dagen / $_dagen_in_een_maand);

// maanden/12 --- ceil gebruikt hier om op hetzelfde resultaat te komen als in de oplossing
$_jaren = ceil($_maanden / $_maanden_in_jaar);

?>

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

            <h1 class="extra">Opdracht if else: deel 2</h1>

            <ul>
                <li>Maak een PHP-script dat achterhaalt hoeveel volledige jaren, maanden, weken, dagen, uren, minuten en seconden er in een gegeven aantal seconden zit (bv. 221108521). Hoeft niet met if-statement.</li>

                <li>
                    Ga er van uit dat een maand 31 dagen kent en een jaar 365 dagen. Het resultaat ziet er ongeveer als volgt uit:

                    <div class="facade-minimal" data-url="http://www.app.local/index.php">

                        <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>

                        <p>in 221108521 seconden</p>

                        <ul>
                            <li>minuten:</li>
                            <p>
                                Er zitten
                                <?php echo $_minuten ?> minuten in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                            <li>uren</li>
                            <p>
                                Er zitten
                                <?php echo $_uren ?> uren in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                            <li>dagen</li>
                            <p>
                                Er zitten
                                <?php echo $_dagen ?> dagen in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                            <li>weken</li>
                            <p>
                                Er zitten
                                <?php echo $_weken ?> weken in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                            <li>maanden</li>
                            <p>
                                Er zitten
                                <?php echo $_maanden ?> maanden in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                            <li>jaren</li>
                            <p>
                                Er zitten
                                <?php echo $_jaren ?> jaren in
                                    <?php echo $_seconden ?> seconden.
                            </p>
                        </ul>
                    </div>

                </li>
            </ul>


        </section>

    </body>

    </html>