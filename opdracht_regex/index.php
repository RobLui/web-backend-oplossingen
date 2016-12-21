

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGEX</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <label for="regex" style:"display:block; margin-bottom:100px;">Regular expr:</label>
      <input type="text" style="display:block; height:25px;" name="regex" value="">
      <!--  <?php isset($_POST["regex"]) ? $posted ="ja" : $posted ="nee" ?> -->
      <label for="string">String:</label>
      <input type="text" style="display:block; height:100px;" name="string" value="">
      <button type="submit" name="submit">verzenden</button>
    </form>
  </body>
</html>

<?php
echo $posted . " "; //test

if (isset($_POST["submit"])) {
  if (isset($_POST["string"]) && isset($_POST["regex"])) {
    $string_post = $_POST["string"];
    $string_regex = $_POST["regex"];
    preg_match( "/" . $string_regex . "/", $string_post, $matches);

      foreach ($matches as &$match)
      {
        $match = preg_replace( '/'  . $string_regex . '/', "@",$string_post);
        echo $match;
      }
  }

  else{
      echo "iet anders";
  }

}
 ?>
