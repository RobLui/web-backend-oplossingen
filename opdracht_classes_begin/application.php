<?php


$percent = "Percent";

 function __autoload($className)
{
  require_once('classes/' . $className . '.php');
}

__autoload($percent);
// require_once("application.php");

//150,100 mogen zo ingevoerd worden omdat ze in de constructor van de klasse aangeroepen worden (zelfde als in c# ongeveer)
$instance_percent_class = new Percent(150,100);

// test wat er in de Percent class zit
// var_dump($instance_percent_class);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Application Percent Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  <table>
    <td>Absoluut</td>
    <td>
      <?= $instance_percent_class->formatNumber($instance_percent_class->absolute)?>
    </td>
    <tr>
    </tr>
    <td>relatief</td>
    <td>
      <?= $instance_percent_class->formatNumber($instance_percent_class->relative)?>
    </td>
    <tr>
    </tr>
    <td>Geheel getal</td>
    <td>
      <?= $instance_percent_class->formatNumber($instance_percent_class->hundred)?>
    </td>
    <tr>
    </tr>
    <td>Nominaal</td>
    <td>
      <?= $instance_percent_class->nominal?>
    </td>
  </table>
  </body>
</html>
