<?php

//Ik heb het gevoel dat de autoload niet werkt, ik moet in mijn andere functies nog "Animal.php" gaan includen
function __autoload($className)
{
 include('classes/' . $className . '.php');
}

// ($name,$gender,$health)
$zebra = new Animal("Zebralio","mannelijk",100);
$eekhoorn = new Animal("Eekhornina","vrouwelijk",200);
$beer = new Animal("BaloeDeBruineBeer","mannelijk",300);

// ($name, $gender, $health, $species)
$african_lion = new Lion("Mufasa","mannelijk",1000,"African Lion");
$north_american_lion = new Lion("Eldoradina","vrouwelijk",1000,"North American Lion")

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Application</title>
   </head>
   <body>
   <!-- Print van ieder dier de name, gender en health members door gebruik te maken van de getters -->
   <p>De zebra genaamd <?= $zebra->getName() ?> heeft <?= $zebra->getHealth(); ?> health en is <?= $zebra->getGender(); ?></p>
   <p>De eekhoorn genaamd <?= $eekhoorn->getName() ?> heeft <?= $eekhoorn->getHealth(); ?> health en is <?= $eekhoorn->getGender(); ?></p>
   <p>De beer genaamd <?= $beer->getName() ?> heeft <?= $beer->getHealth(); ?> health en is <?= $beer->getGender(); ?></p>
   <br>
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
   <!-- Lion opdracht 1 -->
   <p>Leeuw 1 = <?= $african_lion->getName() ?></p>
   <p>Naam = <?= $african_lion->doSpecialMove() ?></p>
   <p>Soort = <?= $african_lion->getSpecies() ?></p>
   <br>
   <!-- Lion opdracht 2 -->
   <p>Leeuw 2 = <?= $north_american_lion->getName() ?></p>
   <p>Naam = <?= $north_american_lion->doSpecialMove() ?></p>
   <p>Soort = <?= $north_american_lion->getSpecies() ?></p>


   </body>
 </html>
