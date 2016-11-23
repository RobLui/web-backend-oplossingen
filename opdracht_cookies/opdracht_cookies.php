<?php

$_textfile = file_get_contents("textbestand.txt");
$_data_uit_txt_bestand = explode(",", $_textfile);

$_naam_txt = $_data_uit_txt_bestand[0]; //Jan
$_pass_txt = $_data_uit_txt_bestand[1]; //Paswoord01

$_voornaam = "voornaam";
$_paswoord = "pass";

$_login = false;

// //Als de logout mee komt in de link (met $_GET)
if(isset($_GET["authenticated"]))
{
  header("location: opdracht_cookies.php");
}


//Als de submit knop wordt ingedrukt.;
if (isset($_POST["submit"]))
{
  //Haal waarden op uit name attributes van de HTML
  //Vergelijk ze met de waarden die uit het textbestand komen
if (!$_login)
  {
    if ($_naam_txt == $_POST[$_voornaam] &&
        $_pass_txt == $_POST[$_paswoord] ){
    //Zet de cookie "authenticated", op true
        // print_r("gelijk aan de inhoud van het textbestand ");
        setcookie("authenticated",true, time() + 3600) ;
        header("location: opdracht_cookies.php?authenticated=true");
        $_login = true;
      }
    else {
    //Hier zal de cookie gelijk zijn aan false (niet bestaande)
      print_r("Niet gelijk aan de inhoud van het textbestand");
      setcookie("authenticated",false, time() - 1000) ;
      $_login = false;
    }
  }
    else {
      header("location: opdracht_cookies.php?authenticated=false");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>
<?php if (!$_login): ?>
<form id="_form" action="opdracht_cookies.php" method="POST">
  <label for="Voornaam">Voornaam:</label>
  <input type="text" name="voornaam"/>
<br>
  <label for="pass">Paswoord:</label>
  <input type="pass" name="pass" label="pass" value=""/>
<br>
<input type="submit" name="submit" value="log in">
<?php else: ?>
  <a href="opdracht_cookies.php?logout=true">Logout</a>
<?php endif; ?>
</form>
</body>
</html>
