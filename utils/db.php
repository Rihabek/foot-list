<?php

function dbConnect()
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=football_french_championship', 'root', '1998Rihab');
    return $db;
  } catch(Exception $e) {
    var_dump($e->getMessage());
    $message = $e->getMessage();
    require('views/500.php');
    die;
  }
}
