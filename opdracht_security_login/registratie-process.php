<?php
// GENEREER PASWOORD
function generatePassword(){
  $letters_klein = "abcdefghijklmnopqrstuvwxyz";
  $letters_groot = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $min_number = 1;
  $max_number = 100;
  $password_klein = substr( str_shuffle( $letters_klein ), 0, 8 );
  $password_groot = substr( str_shuffle( $letters_groot ), 0, 8 );
  $password_numbers = mt_rand($min_number,$max_number);
  //kleine letters
  var_dump($password_klein);
  //grote letters
  var_dump($password_groot);
  //mt_rand returnt random number tss min en max
  var_dump($password_numbers);
  //combinatie vn de 3..
  return ($password_klein . $password_numbers . $password_groot);
}
// ZET SESSIE PASWOORD GELIJK AAN DE WAARDE DIE UIT generatePassword() komt
if (isset($_POST["generate_pass"])) {
  session_start();
  $_SESSION["session_pass"] = generatePassword();
  // echo "test";
  header("location:registratie-form.php");
  // var_dump(generatePassword());
}
// ZET SESSIE EMAIL GELIJK AAN DE POST VAN EMAIL DIE ER DOOR KOMT
if (isset($_POST["email"])) {
  // ---------- CONTROLEER OP GELDIGHEID VAN EMAIL ----------
  //start sessie
  session_start();
  //zet sessie gelijk aan de post value die in email zat
  $email = $_POST["email"];
  $_SESSION["email"] = $email;
  //lokale var die we makkelijk knnen gebruiken hier
  $pasw = $_POST["password"];
  $_SESSION["password"] = $pasw;

  // FOUTE EMAIL FORMAT INGEVOERD
  // var_dump($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //errorboodschap
    $emailErr = "Invalid email format";
    echo $emailErr;
    //stuur terug naar de beginpage
    header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html");
  }
  // JUISTE EMAIL FORMAT INGEVOERD
  else {
    //alles juist
    try {
      $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root','');
      //query && zet de waardes op verschillende variabelen

      $q = $db->prepare("SELECT email FROM users WHERE email = :email LIMIT 10");
      $q->bindValue(':email', $email);
      $q->execute();

    //BESTAAT AL IN DB .. dan mag hij niet aangemaakt worden
    if ($q->rowCount() > 0){
        $check = $q->fetch(PDO::FETCH_ASSOC);
        $row = $check['email'];
        // Do Something If name Already Exist
        echo $row . " bestaat al in de database";
        // Stuur terug naar de form page
        header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html");
    }
    //BESTAAT NOG NIET IN DB .. dan mag hij aangemaakt worden
    else {
        // Do Something If name doesn't excist yet
        // echo $email . " bestaat nog niet, dus wordt nu in de database bijgestoken :)";
        $db_query = "INSERT INTO users (id,email,salt,hashed_password,last_login_time) VALUES(NULL, :email, salt, :hashed_password, now())";
        //query in db
        $db_access = $db->prepare($db_query);
        $db_access->execute(array(
               ':email' => $email,
               ':hashed_password' => $pasw));
         // Als de data in de database is gezet dan moet er naar de login-form pagina geleid worden
         header("location: http://oplossingen.web-backend.local/opdracht_security_login/login-form.php");
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
  header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html");
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
echo "Hier liep het fout " . $e->getMessage();
}



?>
