<?php
require('models/team.php');

function showTeams() {
  $teams = listTeam();
  require('views/teams.php');
}

function showTeam(int $id)
{
  $team = getTeam($id, $_GET['id']);
  require('views/team.php');
}

?>
