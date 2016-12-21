<?php
session_start();
// session_unset();

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

if (isset($_POST["registreer"])) {
  if (isset($_POST["email"])) // email
    {
      $_SESSION["email"] = $_POST["email"];
      var_dump($_SESSION["email"]);
    }
  if (isset($_POST["session_pass"])) // paswoord
    {
      $_SESSION["session_pass"] = $_POST["session_pass"];
      var_dump($_SESSION["session_pass"]);
    }
// ---------------------------
  if (strlen($_POST["session_pass"]) > 0 && strlen($_POST["email"]) > 0) //check of er iets in de post van beide zit, mag niet leeg zijn
  {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){ //fout email formaat
    $_SESSION["boodschap"] = "Juist email formaat ingegeven aub";
    header("location: /registratie-form.php");
    // /opdracht_security_login
    }
    else{
      $email = $_POST["email"];
      try
      { // doe iets bij alles juist
        $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root',''); // db connectie
        $q = $db->prepare("SELECT email FROM users WHERE email = :email LIMIT 10"); // query && zet de waardes op verschillende variabelen
        $q->bindValue(':email', $email);
        $q->execute();

        if ($q->rowCount() > 0)   //email al in db
        {
            $check = $q->fetch(PDO::FETCH_ASSOC);
            $row = $check['email'];
            header("location:/registratie-form.php");
            //  /opdracht_security_login
            $_SESSION["boodschap"] = $row . ' bestaat al in de database' . '<br> <a href="/opdracht_security_login/login-form.php">Log in here </a>';
        }
        else //BESTAAT NOG NIET IN DB .. dan mag hij aangemaakt worden
        {

            $pasw = $_POST["session_pass"];
            $random_salt = uniqid(mt_rand(), true); //willekeurige salt string
            $hashed_pasw = hash("sha512", ($pasw . $random_salt)); //hash paswoord van de combinatie (posted paswoord & random salt)

            // Do Something If name doesn't excist yet
            $_SESSION["boodschap"] = $email . ' bestaat nog niet, dus wordt nu in de database bijgestoken , <br> <a href="/opdracht_security_login/login-form.php">Log in here </a>';
            $db_query = "INSERT INTO users (id,email,salt,hashed_password,last_login_time) VALUES(NULL, :email, :salt, :hashed_password, now())";
            //query in db
            $db_access = $db->prepare($db_query);
            $db_access->execute(array(
                   ':email' => $email,
                   ':hashed_password' => $hashed_pasw,
                   ':salt' => $random_salt));

            $concat_mail_komma = $email . ",";
            $hashed_mail = hash("sha512", ($email . $random_salt)); //hash paswoord van de combinatie (posted paswoord & random salt) //  cookie
            $ttl_concat_hash_mail = $concat_mail_komma . $hashed_mail; //  cookie
            setcookie("login", $ttl_concat_hash_mail, time() + (86400 * 30) ); //  cookie
            header("location: /dashboard.php"); //relocate to dashboard met gesette cookie
            // /opdracht_security_login
        }
      }
      catch (PDOException $e) {   // DB CONNECTIE FAILED - VANG OP
      $_SESSION["boodschap"] =  "database error = " . $e->getMessage();
      } // einde catch
    }
  }
// ---------------------------
  else
    {
    if(strlen($_POST["session_pass"]) < 5){
      $_SESSION["boodschap"] = "groter passwoord ingeven plox";
    }
    if(strlen($_POST["email"]) < 5){
      $_SESSION["boodschap"] = "groter emailadres ingeven plox";
    }
      header("location: /registratie-form.php");
      // opdracht_security_login/
    }
}
if (isset($_POST["generate_pass"])) //generatePassword used
    {
        $_SESSION["session_pass"] = generatePassword();
        $_SESSION["email"] = $_POST["email"];
        var_dump($_SESSION["session_pass"]);
        header("location: /registratie-form.php");
        // opdracht_security_login/
    } //LAAT HIER STAAN !!
    // session_unset($_SESSION["boodschap"]);

?>
