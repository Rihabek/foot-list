<?php
require('models/team.php');

function showTeams() {
  $teams = listTeam();
  require('views/team.php');
}



?>
