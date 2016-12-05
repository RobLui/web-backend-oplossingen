<?php


try {
  // Maak een connectie met de lokale MySQL server en selecteer de database bieren
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');
  // Voer de volgende query uit: selecteer alles uit de tabel brouwers
  $db_query = "SELECT * FROM brouwers";

  $db_access = $db->prepare($db_query);
  $db_access->execute();

//deze zorgt ervoor dat de "brouwernr, brnaam, adres,postcode, gemeente en omzet geselecteerd"
  $rijen = array();

  while ($rijen = $db_access->fetch(PDO::FETCH_ASSOC)) {
    $rijen[] = $rij;
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
    <!-- Bouw een <table> met de gevonden resultaten. -->
    <table>
      <thead>
        <th><?= "#" ?></th>
        <?php foreach ($rijen as $key => $value): ?>
            <th>
              <?= $key ?>
            </th>
        <?php endforeach; ?>
      </thead>
      <tbody>
      			<?php foreach ($rijen as $key => $_naam): ?>
              <tr>
      					<td><?= ( $key + 1 ) ?></td>
      					<td><?= $_naam ?></td>
      				</tr>
      			<?php endforeach ?>
      </tbody>
      <tfoot>

      </tfoot>
    </table>



  </body>
</html>
