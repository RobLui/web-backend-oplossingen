<?php

if (isset($_POST["generate_pass"])) {
  echo "test";
}
function generatePassword(){
  $letters_klein = "abcdefghijklmnopqrstuvwxyz";
  $letters_groot = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $min_number = 1;
  $max_number = 100;
  $password_klein = substr( str_shuffle( $letters_klein ), 0, 8 );
  $password_groot = substr( str_shuffle( $letters_groot ), 0, 8 );
  $password_numbers = mt_rand($min_number,$max_number);
  //kleine letters
  var_dump($password_klein);
  //grote letters
  var_dump($password_groot);
  //mt_rand returnt random number tss min en max
  var_dump($password_numbers);
  //combinatie vn de 3..
  return ($password_klein . $password_numbers . $password_groot);
}
var_dump(generatePassword());
?>
