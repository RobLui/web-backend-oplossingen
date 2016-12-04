<?php
// $result_set = $pdo->prepare("INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`)
// VALUES (:username, :password, :first_name, :last_name)");
// $result_set->execute(array(
//     ':username' => '~user',
//     ':password' => '~pass',
//     ':first_name' => '~John',
//     ':last_name' => '~Doe'
// ));
try {
  //verbinding database
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');
  //query && zet de waardes op verschillende variabelen
  $db_query = "INSERT INTO 'brouwers'
  ('brnaam', 'adres', 'postcode', 'gemeente', 'omzet')
  VALUES(:brnaam,:adres,:postcode,:gemeente,:omzet)";
  //query in db
  $db_access = $db->prepare($db_query);
  //voer query in db uit , maakt gebruik van eerder gezette variabelen (in de db_query)
  $db_access->execute(array(
        ':brnaam' => 'testuser',
        ':adres' => 'test adres',
        ':postcode' => 'test postcode',
        ':gemeente' => 'test gemeente',
        ':omzet' => '5'
  ));
  // var_dump($db_access);
}

catch (PDOException $e) {
  //foutmelding bij geen verbinding
echo "Hier liep het fout: " . $e->getMessage();
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
