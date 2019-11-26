<?php
require_once('utils/db.php');

function listCoachs()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM `coachs`');
  $stmt->execute();

  return $stmt->fetchAll();

}

function listcoach(int $id)
{

  $db = dbconnect();

  $stmt = $db->prepare('SELECT * FROM coachs WHERE id = :id');

  $stmt->bindValue(':id', $id);

  $stmt->execute();

  return $stmt->fetch();

}
 ?>
