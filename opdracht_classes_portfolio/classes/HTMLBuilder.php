<?php
// include("html/body.partial.php");
//
// spl_autoload_register(function($class_name){
// include "html/" . $class_name . ".php";
// });

class HTMLBuilder{
  // function __autoload($className)
  // {
  //  include('html/' . $className . '.php');
  // }
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
  require_once('html/' . $this->header . '.php');
  //Maak body
  require_once('html/' . $this->body . '.php');

  //Maak footer
  require_once('html/' . $this->footer . '.php');

}
}
?>
