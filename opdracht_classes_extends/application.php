<?php

//Ik heb het gevoel dat de autoload niet werkt, ik moet in mijn andere functies nog "Animal.php" gaan includen
function __autoload($className)
{
 require_once('classes/' . $className . '.php');
}
// include('classes/animal.php');

// $name,$gender,$health
$zebra = new Animal("Zebralio","mannelijk",100);
$eekhoorn = new Animal("Eekhornina","vrouwelijk",200);
$beer = new Animal("BaloeDeBruineBeer","mannelijk",300);

// $name, $gender, $health, $species
$african_lion = new Lion("Mufasa","mannelijk",1000,"African Lion");
$north_american_lion = new Lion("Eldoradina","vrouwelijk",1000,"North American Lion");

// $name, $gender, $health, $species
$zebro_uno = new Zebra("Zebrino","mannelijk",200,"American Zebra");
$zebra_dos = new Zebra("Zebrina","vrouwelijk",200,"Belgian Zebra");
// var_dump(new Zebra());

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Application</title>
   </head>
   <body>
   <h2>Opdracht getters printen </h2>
   <!-- Print van ieder dier de name, gender en health members door gebruik te maken van de getters -->
   <p>De zebra genaamd <?= $zebra->getName() ?> heeft <?= $zebra->getHealth(); ?> health en is <?= $zebra->getGender(); ?></p>
   <p>De eekhoorn genaamd <?= $eekhoorn->getName() ?> heeft <?= $eekhoorn->getHealth(); ?> health en is <?= $eekhoorn->getGender(); ?></p>
   <p>De beer genaamd <?= $beer->getName() ?> heeft <?= $beer->getHealth(); ?> health en is <?= $beer->getGender(); ?></p>
   <br>
   <h2>Zebra class</h2>
   <!--  Probeer van enkele dieren de health points te vermeerderen/verminderen door gebruikt te maken van dechangeHealth
         method en een numerieke waarde (positief of negatief) mee te geven. -->
   <p> Zebra health = <?=  $zebra->getHealth() - 10 ?> </p>
   <p> Eekhoorn health = <?=  $eekhoorn->getHealth() - 20 ?> </p>
   <p> Beer health = <?=  $beer->getHealth() - 30 ?> </p>
   <br>
   <!-- Print de waarde die de doSpecialMove method returnt voor dat dier. -->
   <p>Zebra special move = <?= $zebra->doSpecialMove() ?></p>
   <p>Eekhoorn special move = <?= $eekhoorn->doSpecialMove() ?></p>
   <p>Beer special move = <?= $beer->doSpecialMove() ?></p>
   <br>

   <h2>Lion class</h2>
   <!-- Lion opdracht 1 -->
   <p>Leeuw 1 = <?= $african_lion->getName() ?></p>
   <p>Naam = <?= $african_lion->doSpecialMove() ?></p>
   <p>Soort = <?= $african_lion->getSpecies() ?></p>
   <br>
   <!-- Lion opdracht 2 -->
   <p>Leeuw 2 = <?= $north_american_lion->getName() ?></p>
   <p>Naam = <?= $north_american_lion->doSpecialMove() ?></p>
   <p>Soort = <?= $north_american_lion->getSpecies() ?></p>
   <br>

   <!--  Zebra opdracht-->
   <h2>Zebra class</h2>
   <p>Naam = <?= $zebro_uno->getName() ?></p>
   <p>Soort = <?= $zebra_dos->getSpecies() ?></p>
   <!--  doSpecialMove() kan toch worden uitgevoerd doordat deze overgeerfd wordt uit de animal class-->
   <p>Special move? = <?php echo $zebra_dos->doSpecialMove() ?></p>


   </body>
 </html>
