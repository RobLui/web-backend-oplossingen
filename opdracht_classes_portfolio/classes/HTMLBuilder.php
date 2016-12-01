<?php
// include("html/body.partial.php");
//
// spl_autoload_register(function($class_name){
// include "html/" . $class_name . ".php";
// });
include_once("../js/script.js");

class HTMLBuilder{
  function __autoload($className)
  {
   include('html/' . $className . '.php');
  }
  protected $header = "header.partial";

  protected $body = "body.partial";

  protected $footer = "footer.partial";

  // __autoload(getHeader());
  // __autoload(getBody());
  // __autoload(getFooter());

  public function getHeader(){
    return $this->header;
  }
  public function getBody(){
    return $this->body;
  }
  public function getFooter(){
      return $this->footer;
    }

public function __construct(){

  //Maak header
  $this->getHeader();
  //Maak body
  $this->getBody();
  //Maak footer
  $this->getFooter();
}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HTMLBuilder</title>
  </head>
  <body>

    <header>
      <h1>Portfolio</h1>
    </header>

    <div class="container">

    </div>

    <footer>

    </footer>
  </body>
</html>
