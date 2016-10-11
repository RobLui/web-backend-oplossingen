<!--NOG AF TE WERKEN OEFENING   -->
<?php

$tien = 10;
$i_maal_j = array();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Looping statements deel 3</title>
    <style>
    td{
      padding:10px;
      border:1px solid black;
    }
    .kleurklasse{
      background-color: green;
    }
    </style>
  </head>
  <body>


    <?php

    $multi_dim_table = [ $i_maal_j => $i,$j ];

          for($i = 0; $i <= $tien; $i++):
          ?>
              <table>
                  <tr>
                    <!-- FOR -->
                      <?php for($j = 1; $j <= $tien; $j++): ?>
                        <!-- IF -->
                        <?php if (($i * $j)%2 != 0): ?>
                          <td class="kleurklasse">
                              <?php
                              $i_maal_j = $i * $j;
                              echo $i_maal_j ?>
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

  </body>
</html>
