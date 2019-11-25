<?php
require_once('utils/db.php');

function listTeam ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM teams');

  $stmt->execute();

  return $stmt->fetchAll();

}

 ?>
