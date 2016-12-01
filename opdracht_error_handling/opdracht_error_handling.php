<?php

$bericht = "";
try {
  //Check of deze al submitted is..
  if (isset($_POST["code"]))
  {
    //utf8_decode vangt alle andere symbolen op die niet in utf standaard staan gedefined
    if (strlen(utf8_decode($_POST["code"])) < 8)
    {
      //Als het leeg gesubmit is..
      if ($_POST["code"] == "")
      {
        $bericht = "Je mag niets leeg posten :)";
      }
      else
      {
        //Als het te kort was..
        $bericht = $_POST["code"] . " is niet lang genoeg";
      }
    }
    else {
      //Alles in orde, mag inloggen
      $bericht = "Have fun logging in";
    }
    echo $bericht;
    // throw new Exception("testing out .. :)");
  }
}
catch (Exception $e) {
  echo $e->getMessage();
}


// EXAMPLE USAGE
// $file = 'people.txt';
// ----Open the file to get existing content----
// $current = file_get_contents($file);
// ----Append a new person to the file----
// $current .= "John Smith\n";
// ----Write the contents back to the file----
// file_put_contents($file, $current);



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
