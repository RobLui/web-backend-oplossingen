<?php
// $result_set = $pdo->prepare("INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`)
// VALUES (:username, :password, :first_name, :last_name)");
// $result_set->execute(array(
//     ':username' => '~user',
//     ':password' => '~pass',
//     ':first_name' => '~John',
//     ':last_name' => '~Doe'
// ));
if (isset($_POST["submit"])) {
try {
  //verbinding database
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');
  //query && zet de waardes op verschillende variabelen
  $db_query = "INSERT INTO brouwers
  (brnaam, adres, postcode, gemeente, omzet)
  VALUES(:brnaam,:adres,:postcode,:gemeente,:omzet)";
  //query in db
  $db_access = $db->prepare($db_query);
  //waarde van de laatste ingeserte id?

  //voer query in db uit , maakt gebruik van eerder gezette variabelen (in de db_query)
  //
  // $db_access->bindValue( ':brnaam', $_POST[ 'brnaam' ] );
  // $db_access->bindValue( ':adres', $_POST[ 'adres' ] );
  // $db_access->bindValue( ':postcode', $_POST[ 'postcode' ] );
  // $db_access->bindValue( ':gemeente', $_POST[ 'gemeente' ] );
  // $db_access->bindValue( ':omzet', $_POST[ 'omzet' ] );
  // $db_access->execute();

  // Methode die teruggeeft wat de id was van de laatste insert in de database, standaard beschikbare methode

  //voer query in db uit , maakt gebruik van eerder gezette variabelen (in de db_query)
  // --- WERKT -- QUERY zat voordien de fout in waardoor het niet werkte...
  $db_access->execute(array(
        ':brnaam'   => $_POST[ 'brnaam' ],
        ':adres'    => $_POST[ 'adres' ],
        ':postcode' => $_POST[ 'postcode' ],
        ':gemeente' => $_POST[ 'gemeente' ],
        ':omzet'    => $_POST[ 'omzet' ],
  ));

  $insertId =	$db->lastInsertId();
  var_dump($insertId);
}
catch (PDOException $e) {
  //foutmelding bij geen verbinding
echo "Hier liep het fout: " . $e->getMessage();
}
  // var_dump($db_access);
}






 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="index_post" action="index.php" method="post">
    <ul>
  <li>
    <label for="brnaam">Brouwernaam</label>
    <input type="text" name="brnaam" id="brnaam">
  </li>
  <li>
    <label for="adres">Adres</label>
    <input type="text" name="adres" id="adres">
  </li>
  <li>
    <label for="postcode">Postcode</label>
    <input type="text" name="postcode" id="postcode">
  </li>
  <li>
    <label for="gemeente">Gemeente</label>
    <input type="text" name="gemeente" id="gemeente">
  </li>
  <li>
    <label for="omzet">Omzet</label>
    <input type="text" name="omzet" id="omzet">
  </li>
</ul>
<input type="submit" value="Insert" name="submit">

</form>

  </body>
</html>
