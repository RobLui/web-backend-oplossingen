<?php
session_start();
// GENEREER PASWOORD

// var om te gebruiken als foutboodschap drager
$foutboodschap = "";

function generatePassword(){
  $letters_klein = "abcdefghijklmnopqrstuvwxyz";
  $letters_groot = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $min_number = 1;
  $max_number = 100;
  $password_klein = substr( str_shuffle( $letters_klein ), 0, 8 );
  $password_groot = substr( str_shuffle( $letters_groot ), 0, 8 );
  $password_numbers = mt_rand($min_number,$max_number);
  $pass_shuffle = substr( str_shuffle($password_groot . $password_klein . $password_numbers),0,16);
  //kleine letters
  // var_dump("klein pasw = " . $password_klein);
  //grote letters
  // var_dump("groot pasw = " . $password_groot);
  //mt_rand returnt random number tss min en max
  // var_dump("number pasw = " . $password_numbers);
  //combinatie vn de 3..
  // var_dump("shuffled pasw = " . $pass_shuffle);
  //return
  return $pass_shuffle;
}


// ZET -----SESSIE PASWOORD----- GELIJK AAN DE WAARDE DIE UIT generatePassword() komt
//ALS GENERATE PASS IS INGEDRUKT WORDT DAT HET PASSWOORD
if (isset($_POST["generate_pass"])) {
    //session_pass gelijk stellen aan wat er uit generatePassword() komt
    $_SESSION["generated_pass"] = generatePassword();
    //relocate naar reg-form.php
    // header("location: http://oplossingen.web-backend.local/opdracht_security_login/registratie-form.php");
    $generated_pass = $_SESSION["session_pass"];
}

// ZET -----SESSIE PASWOORD----- GELIJK AAN DE WAARDE DIE IN PASSWOORD ZAT
//ALS GENERATE PASS NIET IS INGEDRUKT WORDT DE POST VAN HET PASWOORD WAT JE INPUTTE HET PASWOORD
{
  if (isset($_POST["password"]) ) {
    //POST van paswoord in session paswoord zetten
    $pasw = $_POST["password"];
    // $foutboodschap =   $pasw;
    $_SESSION["session_pass"] = $pasw;
  }
}

// ZET -----SESSIE EMAIL----- GELIJK AAN DE POST VAN EMAIL DIE ER DOOR KOMT
if (isset($_POST["email"])) {
  //POST van email in session email zetten
  $email = $_POST["email"];
  $_SESSION["email"] = $email;
  // ---------- CONTROLEER OP GELDIGHEID VAN EMAIL ----------
  //als het niet het juiste is..
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //FOUTE EMAIL FORMAT INGEVOERD
    $emailErr = "Invalid email format";
    //echo foutboodschap
    // $foutboodschap = $emailErr;
    //stuur terug naar de beginpage
    header("location: http://oplossingen.web-backend.local/opdracht_security_login/registratie-form.php"); // ****************
  }

  // JUISTE EMAIL FORMAT INGEVOERD
  else {
    // alles juist
    try {
      // db connectie
      $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root','');
      // query && zet de waardes op verschillende variabelen
      $q = $db->prepare("SELECT email FROM users WHERE email = :email LIMIT 10");
      $q->bindValue(':email', $email);
      $q->execute();

    //BESTAAT AL IN DB .. dan mag hij niet aangemaakt worden
    if ($q->rowCount() > 0){
        $check = $q->fetch(PDO::FETCH_ASSOC);
        $row = $check['email'];
        // Do Something If name Already Exist - row geeft het email adres terug dat al bestaat
        echo $row . " bestaat al in de database";
        // Stuur terug naar de form page
        // header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html"); //*****************
    }
    //BESTAAT NOG NIET IN DB .. dan mag hij aangemaakt worden
    else {
        // Do Something If name doesn't excist yet
        echo $email . " bestaat nog niet, dus wordt nu in de database bijgestoken :)";
        $db_query = "INSERT INTO users (id,email,salt,hashed_password,last_login_time) VALUES(NULL, :email, salt, :hashed_password, now())";
        //query in db
        $db_access = $db->prepare($db_query);
        $db_access->execute(array(
               ':email' => $email,
               ':hashed_password' => $pasw));
         // Als de data in de database is gezet dan moet er naar de login-form pagina geleid worden
        //  header("location: http://oplossingen.web-backend.local/opdracht_security_login/login-form.php"); //************
    }
    }
    //db connectie mislukt
    catch (PDOException $e) {
      echo "hier liep het fout bij de verbinding " . $e->getMessage();
    }
  }
}
else {
  // mocht er toch nog iets anders mis lopen..
  echo "vul een juist emailadres in plox";
  // header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html"); //****************
}

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
//foutbericht
$foutbericht =  $e->getMessage();
// echo "Hier liep het fout " . $e->getMessage();
}

// $_SESSION["generated_pass"] = $generated_pass;

?>
