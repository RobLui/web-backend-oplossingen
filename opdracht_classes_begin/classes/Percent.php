<?php

//class names altijd met een hoofdletter
class Percent
{
  public $absolute;
  public $relative;
  public $hundred;
  public $nominal;
  //construct is met dubbele __
  public function __construct($new,$unit)
  {
  //$this gebruiken omdat de variabelen in de klasse zelf zich bevinden
    $this->absolute = $new/$unit;
    $this->relative = $this->absolute -1;
    $this->hundred = $this->absolute * 100;

    //groter dan 1
    if ($this ->absolute > 1) {
      $this ->nominal = 'positive';
    }
    //gelijk aan 1
    elseif ($this -> $absolute == 1) {
      $this -> $nominal = 'status-quo';
    }
    //kleiner dan 1
    elseif ($this -> $absolute < 1) {
      $this -> $nominal = 'negative';
    }
  }
  // string number_format ( float $number [, int $decimals = 0 ] ) == afronden met 2 decimalen
  public function formatNumber($number)
  {
    return number_format($number,2);
  }
}

//TEST
// function callFormatFunction()
// {
//   class $Percentclass = new Percent();
//   $Percentclass->formatNumber(2);
// }
// var $a = callFormatFunction();
// print_r(a);

 ?>
