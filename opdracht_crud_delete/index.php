<?php
// WERKT NOG NIET --- DE DELETE ABILITY

try {
  // ----------------------------- GET EVERYTHING -----------------------------
  // Maak een connectie met de lokale MySQL server en selecteer de database bieren
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');
  // Voer de volgende query uit: selecteer alles uit de tabel brouwers
  $db_query = "SELECT * FROM brouwers";

  $db_access = $db->prepare($db_query);
  $db_access->execute();

  $veldnamen	=	array();

  //vertrek bij 0 tot en met de lengte van de beschikbare lengte van verschillende kolommen , -- returns the number of columns in the result set --
  for ( $i = 0; $i < $db_access->columnCount(); ++$i )
  {
    //meta inhoud opvragen gaat door getColumnMeta();
    $veldnamen[]	=	$db_access->getColumnMeta( $i )['name'];
  }

  //De brouwer-data ophalen
  $alle_brouwer_data	=	array();

  while( $rij_van_data = $db_access->fetch( PDO::FETCH_ASSOC ) )
  {
    $alle_brouwer_data[]	=	$rij_van_data;
  }

  // ----------------------------- MAKE DELETE -----------------------------
  //Check of er geledete moet worden


  //query to do in db
  $db_delete_query	=	'DELETE FROM brouwers WHERE brouwernr LIKE :brouwernr';
  //link met db
  $db_del_access = $db->prepare($db_delete_query);
  $db_del_access->bindValue( ':brouwernr', $_POST['delete'] );
  //var_dump($_POST["delete"]);
  //var_dump($db_del_access);

   if (isset($_POST["delete"])) {
  //voer uit
   $db_del_access->execute();
   }
}
catch (PDOException $e) {
  // Zorg ervoor dat wanneer er niet kan geconnecteerd worden met de database, er een custom foutboodschap verschijnt, inclusief de specifieke fout.
  echo "Hier liep het fout: " . $e->getMessage();
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD DELETE</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="index.php" method="post">

    <!-- Bouw een <table> met de gevonden resultaten. -->
    <table>
      <thead>
        <th><?= "#" ?></th>
        <!-- Laat de waarde in elk veldnaam van parameter ['name'] als hoofding van de kolom dienen -->
        <!--  Dit zijn de waardes: brouwernr,	brnaam,	adres,	postcode,	gemeente,	omzet -->
        <?php foreach ($veldnamen as $key => $value): ?>
            <th>
              <!--  Display deze waarde in nieuwe kolommen voor zolang er kolommen zijn-->
              <?= $value ?>
            </th>
          <?php endforeach; ?>
      </thead>

      <tbody>
        <!--  Maakt gebruik van alle brouwer_data en ga hierin dieper werken-->
        <?php foreach ($alle_brouwer_data as $individu_data => $gegevens): ?>
              <tr>
                <td>
                  <?= $key++ ?>
                </td>
                <?php foreach ($gegevens as $waarde): ?>
  						      <td><?= $waarde ?></td>
  					    <?php endforeach ?>
                <td>
                  <button type="submit" name="delete" value=<?= $key-1 ?>>
              	     <img src="icon-delete.png" alt="delete button">
              	  </button>
                </td>
              </tr>
                   <?php endforeach ?>
      </tbody>
    </form>

      <tfoot>
        <!--  Mag leeg blijven -->
      </tfoot>
    </table>



  </body>
</html>
