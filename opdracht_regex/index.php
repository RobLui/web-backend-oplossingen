

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGEX</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <label for="regex" style:"display:block; margin-bottom:100px;">Regular expr:</label>
      <input type="text" style="display:block; height:25px;" name="regex" value="<?= isset($_SESSION["regex"]) ? $_SESSION["regex"] : "" ?>">

      <label for="string">String:</label>
      <input type="text" style="display:block; height:100px;" name="string" value="<?= isset($_SESSION["string"]) ? $_SESSION["string"] : "" ?>">
      <button type="submit" name="submit">verzenden</button>
    </form>
  </body>
</html>

<?php

// // NOT WORKING YET
// if (isset($_POST["submit"])) {
//   if (isset($_POST["string"]))
//   {
//     $post_string = $_POST["string"];
//     $string_regex = "/" . '^[A-Za-z0-9]+' . "/i"; // + heb je nodig voor meerdere letters
//     // $string_regex_opl = "/" . '[a-du-zA-DU-Z]' . "/"; ???????????????
//     preg_match($string_regex_opl, $post_string, $matches); // i staat voor case insensitive -> zowel hoofdletters als kleine letters
//
//     if ($matches) { //als er matches zijn
//       foreach ($matches as &$match) //ga elka match af
//       {
//         $match = preg_replace($string_regex, $string_regex_opl ,$post_string); //vervang elke match door iets
//         echo $match; //echo the result
//       }
//     }
//   }
// }

// phpinfo(); //mod rewrite staat standaard ingeschakeld bij mij

// // WERKT
//     if (isset($_POST["string"]) && isset($_POST["regex"])) {
//       //string
//       $string_post = $_POST["string"];
//       $_SESSION["string"] = $string_post;
//       //regex
//       $string_regex = $_POST["regex"];
//       $_SESSION["regex"] = $string_regex;;
//
//     preg_match( "/" . $string_regex . "/", $string_post, $matches);
//     if ($matches) { //als er matches zijn
//       foreach ($matches as &$match) //ga elke match af
//       {
//         $match = preg_replace( '/'  . $string_regex . '/', "# ",$string_post); //vervang elka match door iets
//         echo $match; //echo the result
//       }
//     }
// }

  // else{
  //     echo "iet anders";
  // }
 ?>
