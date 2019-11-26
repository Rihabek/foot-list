<?php
require_once('utils/db.php');

function listCoachs()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM `coachs`');
  $stmt->execute();

  return $stmt->fetchAll();

}

 ?>
