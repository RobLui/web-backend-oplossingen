<?php

class Animal{

  protected $name;
  protected $gender;
  protected $health;

  public function __construct($name,$gender,$health)
  {
    $this->name = $name;
    $this->gender = $gender;
    $this->health = $health;
  }
  //methode 1
  public function getName(){
    return $this->name;
  }
  //methode 2
  public function getGender(){
    return $this->gender;
  }
  //methode 3
  public function getHealth(){
    return $this->health;
  }
  //methode 4
  public function changeHealth($healthPoints){
    return $this->health + $healthPoints;
  }
  //methode 5
  public function doSpecialMove(){
    return "walk";
  }

}

 ?>
