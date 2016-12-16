
<!--
DEZE PAGINA WERD TE INGEWIKKELD, EN ONGEORGANISEERD, DE NIEUWE PAGINA IS EEN SAMENVATTING VAN DEZE PAGINA
DEZE WERKTE NIET , DE NIEUWE WEL..
NIEUWE PAGINA = reg_process_cleanup_testfile.php
-->

<?php
session_start();

// ! UNSET SESSION gebruiken ipv session_destroy for next improvals

$_SESSION["foutboodschap"] = ""; // FOUTBOODSCHAP DRAGER
// GENEREER PASWOORD FUNCTIE GENERATEPASSWORD();
function generatePassword(){
  $letters_klein = "abcdefghijklmnopqrstuvwxyz"; //kleine letters   // var_dump("klein pasw = " . $password_klein);
  $letters_groot = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; //grote letters    // var_dump("groot pasw = " . $password_groot);
  $min_number = 1;
  $max_number = 100;
  $password_klein = substr( str_shuffle( $letters_klein ), 0, 8 );
  $password_groot = substr( str_shuffle( $letters_groot ), 0, 8 ); //mt_rand returnt random number tss min en max // var_dump("number pasw = " . $password_numbers);
  $password_numbers = mt_rand($min_number,$max_number);
  $pass_shuffle = substr( str_shuffle($password_groot . $password_klein . $password_numbers),0,16); //combinatie vn de 3.. // var_dump("shuffled pasw = " . $pass_shuffle);
  return $pass_shuffle; //return
}
// ZET -----SESSIE PASWOORD----- GELIJK AAN DE WAARDE DIE UIT generatePassword() komt //ALS GENERATE PASS IS INGEDRUKT WORDT DAT HET PASSWOORD
if (isset($_POST["generate_pass"])) {
      $_SESSION["session_pass"] = generatePassword(); //session_pass gelijk stellen aan wat er uit generatePassword() komt
}
// ZET -----SESSIE PASWOORD----- GELIJK AAN DE WAARDE DIE IN PASSWOORD ZAT
if (isset($_POST["registreer"]) ) {
  // DATABASE STUFF
  try {
    //connectie met db
    $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root','');
    //query && zet de waardes op verschillende variabelen
    $db_query = "SELECT * FROM users";
    //query in db
    $db_access = $db->prepare($db_query);
    //voer uit
    $db_access->execute();
    // var_dump($db_access);
  }
  catch (PDOException $e) {
  $_SESSION["foutboodschap"] =  $e->getMessage(); //foutbericht
  }
    $_SESSION["session_pass"] = $_POST["session_pass"];; //POST van paswoord in session paswoord zetten
    $_SESSION["email"] = $_POST["email"];

    if (isset($_POST["email"]) && isset($_POST["session_pass"])) { // Check wat er in het email veld doorgestuurd is - POST van email
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ---------- CONTROLEER OP GELDIGHEID VAN EMAIL ---------- //als het niet het juiste is..
        //FOUTE EMAIL FORMAT INGEVOERD
        $emailErr = "Fout email formaat ingegeven"; //foutboodschap bericht
        $_SESSION["foutboodschap"] = $emailErr; //steek de error in de session["foutboodschap"]
        header("location: /opdracht_security_login/registratie-form.php"); //stuur terug naar de beginpage
        }
    else{
          try { // PROBEER IETS BIJ ALLES JUIST
          $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root',''); // db connectie
          $q = $db->prepare("SELECT email FROM users WHERE email = :email LIMIT 10"); // query && zet de waardes op verschillende variabelen
          $q->bindValue(':email', $email);
          $q->execute();

          if ($q->rowCount() > 0)   //BESTAAT AL IN DB .. dan mag hij niet aangemaakt worden , echo = wil je in plaats daarvan inloggen?
          {
              $check = $q->fetch(PDO::FETCH_ASSOC);
              $row = $check['email'];
              echo $row . ' bestaat al in de database, do you want to login instead?<br>' . '<br><a href="/opdracht_security_login/login-form.php">Log in here</a>'; // echo $row . " bestaat al in de database, do you want to login instead?";
          }
          else //BESTAAT NOG NIET IN DB .. dan mag hij aangemaakt worden
          {
              $pasw = $_POST["password"];
              // Do Something If name doesn't excist yet
              echo $email . " bestaat nog niet, dus wordt nu in de database bijgestoken :)" . '<br><br><a href="/opdracht_security_login/login-form.php">Log in</a>';
              $db_query = "INSERT INTO users (id,email,salt,hashed_password,last_login_time) VALUES(NULL, :email, salt, :hashed_password, now())";
              //query in db
              $db_access = $db->prepare($db_query);
              $db_access->execute(array(
                     ':email' => $email,
                     ':hashed_password' => $pasw));
          }
          header("location: /opdracht_security_login/login-form.php");
        }
      catch (PDOException $e) {   // DB CONNECTIE FAILED - VANG OP
        $_SESSION["foutboodschap"] =  "hier liep het fout bij de verbinding " . $e->getMessage();
      } // einde catch
    } // einde try
        } //einde else
          }
  else { // JUISTE EMAIL FORMAT INGEVOERDµ
    $_SESSION["email"] = $_POST["email"];

    if ($_POST["session_pass"] == " ")
    {
      header("location: /opdracht_security_login/registratie-form.php");
    }
// NOG GEEN EMAIL POST GEBEURD HOE DAN OOK..
else {
  // mocht er toch nog iets anders mis lopen..
  $_SESSION["foutboodschap"] = "Er is toch nog iets anders kunnen mislopen";
  header("location: /opdracht_security_login/registratie-form.php");
}
}
?>
