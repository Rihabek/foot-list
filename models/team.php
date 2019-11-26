<?php
require_once('utils/db.php');

function listTeam ()
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT * FROM teams');

  $stmt->execute();

  return $stmt->fetchAll();

}

function getTeam(int $id)
{
  $db = dbConnect();

  $stmt = $db->prepare('SELECT
    coachs.* , teams.name AS team_name , teams.logo
    FROM `coachs`
    INNER JOIN coachs_has_teams
    ON coachs.id = coachs_has_teams.id_coach
    INNER JOIN teams
    ON teams.id = coachs_has_teams.id_team
    WHERE teams.id = :id');

  $stmt->bindValue(':id', $id);

  $stmt->execute();

  return $stmt->fetch();

}

 ?>
