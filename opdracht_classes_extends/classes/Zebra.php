<?php
// Error "Animal" class could not be found weggewerkt door te includen in beide files
// include("Animal.php"); -> Heb de fout gevonden, waardoor deze includes niet meer mogen !

class Zebra extends Animal
{
  // $species (member, protected)
  protected $species;

  // __construct kent de $species parameter toe aan de class member $species
  public function __construct($name, $gender, $health, $species)
  {
      parent::__construct($name, $gender, $health);
      $this->species = $species;
  }

  // getSpecies returnt de class member species
  public function getSpecies() {
    return $this->species;
  }
  // geen doSpecialMove(), wordt al overgeerfd
}

 ?>
