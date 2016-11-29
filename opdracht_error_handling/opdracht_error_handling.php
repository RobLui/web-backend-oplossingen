<?php

$bericht = "";

try {
  if (isset($_POST["code"]))
  {
    if (strlen(utf8_decode($_POST["code"])) < 8 || $_POST["code"] == "" )
    {
      if ($_POST["code"] == "")
      {
        $bericht = "je mag niets leeg posten :)";
      }
      else
      {
        $bericht = $_POST["code"] . " is niet lang genoeg";
      }
    }
    else {
      $bericht = "have fun logging in";
    }
    echo $bericht;
    // throw new Exception("testing out .. :)");
  }
} catch (Exception $e) {
  echo $e->getMessage();
}



 ?>

 <html>
 <body>
 <h1>Geef uw kortingscode op</h1>
 <form name ="error_handling" action="opdracht_error_handling.php" method="POST">
 Kortingscode
 <br>
 <input type="text" name="code">
 <br>
 <input type="submit">
 </form>

 </body>
 </html>
