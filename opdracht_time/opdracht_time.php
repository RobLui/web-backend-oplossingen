<?php

// $huidige_tijd = time();
//mktime — Get Unix timestamp for a date
$timestamp = 	mktime(22, 35, 25, 01, 21, 1904);
// date — Format a local time/date
$datum	=	date('d F Y, g:i:s A', $timestamp);

$huidige_time = time();
// huidige format?
$huidige_datum = date('d F Y, g:i:s A', $huidige_time);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time</title>
  </head>
  <body>
      <p>Tijd voor oefening: <?= $datum ?></p>
      <p>Tijd voor oefening: <?=  $huidige_datum ?></p>
  </body>
</html>
