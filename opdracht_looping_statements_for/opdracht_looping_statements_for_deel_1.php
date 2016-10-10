<?php 

$rijen = 10;
$kolommen = 10;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            td {
                border: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>


    <body>


        <?php    
        for($i = 0; $i < $rijen; $i++):
        ?>
            <table>
                <tr>
                    <?php for($j = 0; $j < $kolommen; $j++): ?>
                        <td>
                            kolommen
                        </td>
                        <?php endfor ?>
                </tr>

                <?php   
                endfor
                ?>
            </table>
    </body>

    </html>