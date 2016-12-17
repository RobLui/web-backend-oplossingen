<?php
session_start();

if(isset($_POST['log_in']))
{
  if (isset($_POST['email_login'])) // email
    {
      $_SESSION["email_login"] = $_POST["email_login"];
    }
  if (isset($_POST["pwd_login"])) // paswoord
    {
      $_SESSION["pwd_login"] = $_POST["pwd_login"];
    }
  if (strlen($_POST["pwd_login"]) > 0 && strlen($_POST["email_login"]) > 0) //check of er iets in de post van beide zit, mag niet leeg zijn
  {
    if (!filter_var($_POST["email_login"], FILTER_VALIDATE_EMAIL)){ //fout email formaat
    $_SESSION["boodschap"] = "Juist email formaat ingegeven aub";
    header("location: /opdracht_security_login/login-form.php");
  }
  else
  {
    try {

  $email_login        = $_POST['email_login'];
  $pwd_login          = $_POST['pwd_login'];

  $db                 = new PDO("mysql:host=localhost;dbname=opdracht-security-login", "root", '');
  $query              = 'SELECT * FROM users WHERE email = :email';
  $q                  = $db->prepare($query);
  $q->bindValue(':email' , $email_login);
  $q->execute();

  // $values_from_db     = array();
  $_from_db           = $q->fetch(PDO::FETCH_ASSOC);
  $salt_from_db       = $_from_db['salt'];
  $email_from_db      = $_from_db['email'];
  $hashed_pass_from_db= $_from_db['hashed_password'];

  $hashed_pasw_login = hash("sha512", ($pwd_login . $salt_from_db)); //hash paswoord van de combinatie (posted paswoord & random salt)

  if ($q->rowCount() > 0)   //email in db
  {
      $check = $q->fetch(PDO::FETCH_ASSOC);
      $row = $check['email'];
      $_SESSION["boodschap"] = $row . ' bestaat in de database';
      header("location: /opdracht_security_login/dashboard.php"); //relocate to dashboard met gesette cookie

  if($email_login != $email_from_db)
    {
      $_SESSION['boodschap'] = "Zo is er geen email in de database";
      header('location: login-form.php' ); //return to login-form
    }
  if($hashed_pass_from_db != $hashed_pasw_login)
    {
      // $_SESSION['boodschap'] = "concat email salt = " . $concat_email_salt . " salted email = " . $salted_email;
      $_SESSION["boodschap"] = "hashed pass from db = " . $hashed_pass_from_db . " && hashed pass van login = " . $hashed_pasw_login;
      header('location: login-form.php' );
    }
  else
    {
      $_SESSION['boodschap'] = "ingelogd";
      $cookie_val = $_SESSION["email_login"]  . "," . $salt_from_db;
      setcookie("login", $cookie_val, time() + (86400 * 30) ); //  cookie
      header("location: /opdracht_security_login/dashboard.php"); //relocate to dashboard met gesette cookie
    }
  }

  }
  catch (Exception $e) {
    $_SRSSION["boodschap"] = $e->getMessage();
  }
    }
  }
}
header('location: login-form.php' );

?>
