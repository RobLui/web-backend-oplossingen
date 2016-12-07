<?php

try {
  //db connectie
  $db = new  PDO('mysql:host=localhost;dbname=bieren', 'root','');

  $db_query = "SELECT * FROM brouwers ";

  $db_access = $db->prepare($db_query);
  $db_access->execute();
}
catch (PDOException $e) {
echo ("Fout bevind zich hier: " . $e->getMessage());
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD ORDER BY</title>
  </head>
  <body>

  </body>
</html>
