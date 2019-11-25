<?php
require('models/team.php');

function showPlayers() {
  $teams = listPLayers();
  require('views/players.php');
}
 ?>
