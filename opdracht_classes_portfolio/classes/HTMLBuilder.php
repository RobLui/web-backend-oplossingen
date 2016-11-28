<?php

// include("html/body.partial.php");
include_once("../js/script.js");

spl_autoload_register(function($class_name){
include "html/" . $class_name . ".php";
print_r("test");
});


class HTMLBuilder{
  protected $header;
  protected $body;
  protected $footer;

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

// include '../html/body.partial.php';
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
