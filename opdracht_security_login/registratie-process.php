<?php

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

if (isset($_POST["generate_pass"])) {
  session_start();
  $_SESSION["session_pass"] = generatePassword();
  // echo "test";
  header("location:registratie-form.php");
  // var_dump(generatePassword());
}

if (isset($_POST["email"])) {
  // ---------- CONTROLEER OP GELDIGHEID VAN EMAIL ----------
  //start sessie
  session_start();
  //zet sessie gelijk aan de post value die in email zat
  $SESSION["email"] = $_POST["email"];
  //lokale var die we makkelijk knnen gebruiken hier
  $email = $_POST["email"];
  // var_dump($email);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //errorboodschap
    $emailErr = "Invalid email format";
    echo $emailErr;
    //stuur terug naar de beginpage
    header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html");
  }
  else {
    //alles juist
    echo "welcome!";
  }
}
else{
  // mocht er toch nog iets anders mis lopen..
  echo "vul een juist emailadres in plox";
  header("location: http://oplossingen.web-backend.local/opdracht_security_login/form.html");
}

// ---------- CONTROLEER OP GELDIGHEID VAN NAAM ---------- VB W3SCHOOLS
// $name = test_input($_POST["name"]);
// if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//   $nameErr = "Only letters and white space allowed";
// }


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
