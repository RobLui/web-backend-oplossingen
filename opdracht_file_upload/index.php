<?php
session_start();
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>File upload</title>
   </head>
   <body>
     <a href="gegevens-wijzigen-form.php">Gegevens wijzigen</a>
     <a href="#"></a>
   </body>

   <?php if (isset($_SESSION["boodschap"]))
     {
       echo $_SESSION["boodschap"];
       echo "<br>";
     }
     if (isset($_SESSION["show_target_file"]))
       {
         echo "<br>";
         echo $_SESSION["show_target_file"];
       }

     ?>
 </html>
