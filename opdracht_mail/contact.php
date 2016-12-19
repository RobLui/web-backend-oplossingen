<?php
session_start();

$admin_robbert  = "robbertluit@gmail.com";
$admin_pieter   = "pietermelis123@gmail.com";

if (isset($_POST["verzenden"])) {

  if (isset($_POST["email"]) && isset($_POST["boodschap"])) //der zit iet in
  {
    $_SESSION["email"]      = $_POST["email"];
    $email_data = $_POST["email"];
    $_SESSION["boodschap"]  = $_POST["boodschap"];
    $boodschap_data = $_POST["boodschap"];
  }

  if($_POST["email"] == "" || $_POST["boodschap"] == "") // der zit niets in
  {
    header("location: contact_form.php");
    $_SESSION["foutboodschap"] = "Geen email ingevuld";
    $_SESSION["foutboodschap"] = "Geen boodschap ingevuld";
  }

  try {
      $db   = new PDO('mysql:host=localhost;dbname=contact_database', 'root',''); // db connectie
      $db_query = "INSERT INTO contact_messages
                  (id,email,message,time_sent) VALUES
                  (NULL, :email, :message, now())";
      //query in db
      $db_access = $db->prepare($db_query);
      $db_access->execute(array(
             ':email' => $email_data,
             ':message' => $boodschap_data));
  }
  catch (PDOException $e) {
    $_SESSION["foutboodschap"] = $e->getMessage();
  }
}
var_dump($_SESSION);

if ($_POST["checkbox"] == "on")
{

  // if (false === mail($admin_robbert,"test",$boodschap_data)) { //check of de mail verzonden is
  //    echo "Mail was not sent";
  // }

}

?>
