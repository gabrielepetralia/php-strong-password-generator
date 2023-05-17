<?php 
 function generatePassword($length) {
  $letters = "abcdefghijklmnopqrstuvwxyz";
  $special_characters = "!?()[]{}$&_-+*:=/|%@#^<>.,;";
  $pwd = "";
  
  do {
    $pwd .= $letters[rand(0, strlen($letters) - 1)];
    if (strlen($pwd) < $length) $pwd .= strtoupper($letters[rand(0, strlen($letters) - 1)]);
    if (strlen($pwd) < $length) $pwd .= $special_characters[rand(0, strlen($special_characters) - 1)];
    if (strlen($pwd) < $length) $pwd .= rand(0, 9);
  } while (strlen($pwd) < $length);
  $pwd = str_shuffle($pwd);

  return $pwd;
 }
?>