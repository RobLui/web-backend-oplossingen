<?php

require_once("Animal.php");

class Lion extends Animal
{
  protected $species;

  public function __construct($name, $gender, $health, $species)
  {
    parent::__construct($name, $gender, $health);
    $this->species = $species;
  }
  //Return de species variabele die in class Lion staat
  public function getSpecies()
  {
  return $this->species;
  }
  //Voer de special move uit die in de class Lion staat
  public function doSpecialMove()
  {
  return 'Roarrrr';
  }

}

 ?>
