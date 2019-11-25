<?php
require_once('utils/db.php');

function listPlayers ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM players');

  $stmt->execute();

  return $stmt->fetchAll();

}

 ?>
