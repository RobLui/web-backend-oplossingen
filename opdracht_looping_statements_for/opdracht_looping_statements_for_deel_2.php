<?php
$tien = 10;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <style>
        td{
          padding:10px;
          border:1px solid black;
        }
        .kleurklasse{
          background-color:green;
        }
        </style>
    </head>

    <body>

      <?php
      for($i = 0; $i <= $tien; $i++):
      ?>
          <table>
              <tr>
                <!-- FOR -->
                  <?php for($j = 1; $j <= $tien; $j++): ?>
                    <!-- IF -->
                    <?php if (($i * $j)%2 != 0): ?>
                      <td class="kleurklasse">
                          <?php echo $i * $j ?>
                      </td>
                      <!-- ElSE (terwijl de if nog niet afgesloten is met "endif") -->
                    <?php else: ?>
                      <td>
                          <?php echo $i * $j ?>
                      </td>
                      <!-- IF afgesloten -->
                    <?php endif; ?>
                    <!--  FOR afgesloten -->
                      <?php endfor ?>
              </tr>

              <?php
              endfor
              ?>
          </table>
        </body>
    </html>
